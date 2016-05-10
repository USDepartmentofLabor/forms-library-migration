<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * DOL Forms Library Form Controller
 *
 * @package	DOL Forms Library
 * @author	Daniel Jeanniton.
 * @version 2.0.0-pre
 */

class Forms extends CI_Controller {

	private $context = null;
	private $method = "FORMS/AgencyForms";
	private $results = array();
	
	public function __construct()
	{
		parent::__construct ();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('form');
				
		$this->load->library('GOVDataContext');
		$context = $this->govdatacontext->getContext();
		$request = $this->load->library('GOVDataRequest',$context);
		
		$counter = 0;
		$multiplier = 100;
		$result_row = 100;
		while($result_row <= 100){
			$arguments =  array(
					'format' => '\'json\'',
					'Title' => '',
					'orderby' => 'AgencyName'
			);
			if($counter != 0){
				$arguments['skip'] = $counter * $multiplier;
				$store = $this->govdatarequest->callAPI($this->method, $arguments);
				foreach($store as $row){
		
					if($row->Deleted !== 1){
						array_push($this->results, $row);
					}
				}
				$result_row = count($this->results);
		
			}else{
				$this->results = $this->govdatarequest->callAPI($this->method, $arguments);
				$result_row = count($this->results);
			}
			$counter++;
		};
		
	}
	
	public function index()
	{
		$data ["forms_content"] = "forms_view/index";
		$data ['action'] = site_url('forms/search_results');
		$this->load->view ( "forms/template", $data );
	}	

	
	public function agency_title(){
		//Build Array arguments
		$obj_list = array();
		$counter = 0;
		$multiplier = 100;
		$result_row = 100;

		while($result_row <= 100){
			$arguments =  array(
					'format' => '\'json\'',
					'Title' => '',
					'orderby' => 'Title'
			);
			if($counter != 0){
				$arguments['skip'] = $counter * $multiplier;
				$store = $this->govdatarequest->callAPI($this->method, $arguments);
				foreach($store as $row){
					if($row->Deleted != 1){
					array_push($obj_list, $row);
					}
				}
				$result_row = count($obj_list);
			
			}else{
				$store = $this->govdatarequest->callAPI($this->method, $arguments);
				foreach($store as $row){
					if($row->Deleted != 1){
						array_push($obj_list, $row);
					}
				}
				$result_row = count($obj_list);
			}
			$counter++;
		};	
								
		$data['title_page'] ='Forms By Title' ;
		$data['title_results'] = $obj_list;		
		$data['action'] = site_url ( "forms/FormsByTitle");
		$data ["forms_content"] = "forms_view/title";		
		$this->load->view ( "forms/template", $data );	
	}
	
	public function agency_form_number(){
		$obj_list = array();
		$counter = 0;
		$multiplier = 100;
		$result_row = 100;
		while($result_row <= 100){
			$arguments =  array(
					'format' => '\'json\'',
					'Title' => '',
					'orderby' => 'AgencyFormNumber'
			);
			if($counter != 0){
				$arguments['skip'] = $counter * $multiplier;
				$store = $this->govdatarequest->callAPI($this->method, $arguments);
				foreach($store as $row){
					if($row->Deleted != 1){
					array_push($obj_list, $row);
					}
				}
				$result_row = count($obj_list);
				
			}else{
				$store = $this->govdatarequest->callAPI($this->method, $arguments);
				foreach($store as $row){
					if($row->Deleted != 1){
						array_push($obj_list, $row);
					}
				}
				$result_row = count($obj_list);
			}
			$counter++;
		};		
		
		$data['title_page'] ='Forms By Form Number' ;
		$data['title_results'] = $obj_list;
		$data['action'] = site_url ( "forms/FormsByFormNumber");
		$data ["forms_content"] = "forms_view/form_number";
		$this->load->view ( "forms/template", $data );	
	}	
	
	public function agency_form(){
				
		$counter = 0;
		$multiplier = 100;
		$result_row = 100;
		while($result_row <= 100){
			$arguments =  array(
					'format' => '\'json\'',
					'Title' => '',
					'orderby' => 'AgencyName'
			);
			if($counter != 0){
				$arguments['skip'] = $counter * $multiplier;
				$store = $this->govdatarequest->callAPI($this->method, $arguments);
				foreach($store as $row){

					if($row->Deleted !== 1){
					array_push($this->results, $row);
					}
				}
				$result_row = count($this->results);
		
			}else{
				$this->results = $this->govdatarequest->callAPI($this->method, $arguments);
				$result_row = count($this->results);
			}
			$counter++;
		};
						
		$data['title_page'] ='Forms By Agency' ;
		$data['title_results'] = $this->results;
		$data['action'] = site_url ( "forms/FormsByAgency");
		$data ["forms_content"] = "forms_view/form_agency";
		$this->load->view ( "forms/template", $data );		
	
	}
	
	public function agency_view($form_id){
		$view_obj = '';		

		foreach($this->results as $enum_obj){ 
			if((string)$enum_obj->FormNumber == $form_id){
				$view_obj = $enum_obj;					
			} 	
		}
		$data['metaform'] = $view_obj;
		$data['subtitle'] ='DOL Form '.$view_obj->AgencyFormNumber;
		$data['action'] = site_url ( "forms/ViewForm");
		$data ["forms_content"] = "forms_view/meta_info";
		$this->load->view ( "forms/template", $data );				
	}	

	public function form_number_view($form_id){
		$view_obj = '';
		foreach($this->results as $enum_obj){
			if((string)$enum_obj->AgencyFormNumber == $form_id){
				$view_obj = $enum_obj;
			}
		}
		$data['metaform'] = $view_obj;
		$data['subtitle'] ='DOL Form '.$view_obj->AgencyFormNumber;
		$data['action'] = site_url ( "forms/ViewFormNumber");
		$data ["forms_content"] = "forms_view/form_number_info";
		$this->load->view ( "forms/template", $data );
	}	

	public function search_results(){
		$check_input = $this->input->post('FullText');
		$pattern = "#".$this->input->post('FullText')."#i";
		if(!empty($check_input)){
		$matches = array();
		//loop through the data
		foreach($this->results as $key=>$value){
			//loop through each key under data sub array
			foreach((array)$value as $key2=>$value2){
				//check for match.
				if(is_string($value2)){					
					if(preg_match_all($pattern, $value2)) {
						//add to matches array.
						$matches[$key]=$value;
						//match found, so break from foreach
						break;
					}
				}
			}
		}		
		}else{
			$matches = null;
		}
		$data['subtitle'] ='DOL Form Library Search Results';
		$data['match'] = $matches;
		$data['pattern'] = $check_input;
		$data['action'] = site_url ( "forms/FormsByTitle");
		$data ["forms_content"] = "forms_view/search_results";
		$this->load->view ( "forms/template", $data );		
		
	
	}
}				
