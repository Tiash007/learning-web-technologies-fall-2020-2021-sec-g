<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$firstcharacter=$name[0];
	if(is_null($name)==false && strlen($name)>=2 && is_numeric($firstcharacter)==false )
	{ $x=0;
		$flag=false;
		for($x=0;$x<strlen($name);$x++)
		{
			$t= $name[$x];
			switch ($t) {
  case "~":
    $flag=true;
    break;
  case "`":
   $flag=true;
    break;
  case "!":
    $flag=true;
    break;
    case "@":
    $flag=true;
    break;
  case "#":
   $flag=true;
    break;
  case "$":
    $flag=true;
    break;
     case "%":
    $flag=true;
    break;
  case "^":
   $flag=true;
    break;
  case "&":
    $flag=true;
    break;
    case "*":
    $flag=true;
    break;
  case "(":
   $flag=true;
    break;
  case ")":
    $flag=true;
    break;
     case "_":
    $flag=true;
    break;
  case "-":
   $flag=true;
    break;
  case "=":
    $flag=true;
    break;
    case "+":
    $flag=true;
    break;
  case "1":
   $flag=true;
    break;
  case "2":
    $flag=true;
    break;
     case "3":
    $flag=true;
    break;
  case "4":
   $flag=true;
    break;
  case "5":
    $flag=true;
    break;
    case "6":
    $flag=true;
    break;
  case "7":
   $flag=true;
    break;
  case "8":
    $flag=true;
    break;
     case "9":
    $flag=true;
    break;
  case "0":
   $flag=true;
    break;
  case "{":
    $flag=true;
    break;
    case "[":
    $flag=true;
    break;
  case "}":
   $flag=true;
    break;
  case "]":
    $flag=true;
    break;
     case "|":
    $flag=true;
    break;
  case ":":
   $flag=true;
    break;
  case ";":
    $flag=true;
    break;
    case "'":
    $flag=true;
    break;
  case ",":
   $flag=true;
    break;
  case "<":
    $flag=true;
    break;
     case ">":
    $flag=true;
    break;
  case ".":
   $flag=true;
    break;
  case "?":
    $flag=true;
    break;
    case "/":
    $flag=true;
    break;
  case ".":
   $flag=true;
    break;
  case "+":
    $flag=true;
    break;
     case "-":
    $flag=true;
    break;
  case "*":
   $flag=true;
    break;
  case "/":
    $flag=true;
    break;
  default:
    echo " ";
}


		}
		   if($flag=false)
			{$name=$_POST['name'];
		echo $name;
		echo $firstcharacter;

	}
	else{echo "this is not valid";}

}	
	else
		{echo "this is not valid!";}


}
?>