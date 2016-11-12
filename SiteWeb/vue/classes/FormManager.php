<?php

class FormManager
{
	public static function beginForm($methode, $action, $css_class="",$extraOptions="")
	{
                $css_class_option="";
		if(!empty($css_class))
		{
			$css_class_option="class=\"".$css_class."\" ";
		}
                return "<form methode=\"".$methode."\" action=\"".$action."\"".$css_class_option.$extraOptions." >\n";
			
	}
	
	public static function endForm()
	{
		return "</form>";
	}
	
	public static function addInput($labelText,$type,$name,$id,$value=null,$extraOptions="", $noBR=false)
	{
               
		$valueOption =($value ==null) ? "" : " value=\"".$value."\" ";
		$returnText ="";
		if($extraOptions == null) {
			$extraOptions= "";		
		}
		
		if($labelText!=null && $labelText !="")
		{
			
                         $returnText .= "<label for=\"".$id."\">".$labelText."</label>\n";
		}
		
		$returnText .= "<input type=\"".$type."\" name= \"".$name."\" id =\"".$id."\" ".$valueOption." ".$extraOptions." />\n";		
		
		if(!$noBR) {
			$returnText .= "<br/>\n";			
			}
		return $returnText;
		
		
	}	
	
	public static function addTextInput($labelText,$name,$id,$size,$value=null,$extraOptions="")
	{
		return self::addInput($labelText,"text",$name,$id,$value,"size =\"".$size."\" ".$extraOptions);
	}
        
        
	
	public static function addPasswordInput($labelText,$name,$id,$size,$value=null,$extraOptions="")
	{
		return self::addInput($labelText,"password",$name,$id,$value,$size ="\"".$size."\" ".$extraOptions);
	}
        
        public static function addTextAreaInput($labelText, $name, $id, $rows, $cols, $value=null,$extraOptions="")
        {
            $valueOption = ($value ===null) ? "" :$value;
            if($extraOptions== null)
            {
                $extraOptions="";
            }
           $returnText ="";
            if($labelText!=null && $labelText!="")
            {
                $returnText .= "<label for=\"".$id."\">".$labelText."</label>\n";
            }
            $returnText .=  "<textarea name=\"".$name."\" id=\"".$id."\" rows=\"".$rows."\" cols=\"".$cols."\" ".$extraOptions." >".$valueOption."</textarea>\n";
          
            return $returnText;
        }
        
	
	public static function addSubmitButton($value="Creer Nouvelle Article", $extraOptions="")
	{
		return self::addInput(null,"submit","","",$value," ".$extraOptions);	
	}
        
        
        public static function addHiddenInput($name, $id, $value, $extratOptions="")
        {
            return self::addInput(null, "hidden", $name, $id,"".$value,$extratOptions="",true);
        }
        
        
	
}

?>