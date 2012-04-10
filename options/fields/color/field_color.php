<?php
class NHP_Options_color extends NHP_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since NHP_Options 1.0
	*/
	function __construct($field, $value){
		
		parent::__construct();
		$this->field = $field;
		$this->value = $value;
		$this->render();
		
	}//function
	
	
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and outputs the HTML for the field in the settings
	 *
	 * @since NHP_Options 1.0
	*/
	function render(){
		
		$class = (isset($this->field['class']))?$this->field['class']:'';
		
		echo '<div class="farb-popup-wrapper">';
		
		echo '<input type="text" id="'.$this->field['id'].'" name="'.$this->args['opt_name'].'['.$this->field['id'].']" value="'.$this->value.'" class="'.$class.' popup-colorpicker" />';
		echo '<div class="farb-popup"><div class="farb-popup-inside"><div id="'.$this->field['id'].'picker" class="color-picker"></div></div></div>';
		
		echo ($this->field['desc'] != '')?' <span class="description">'.$this->field['desc'].'</span>':'';
		
		echo '</div>';
		
	}//function
	
}//class
?>