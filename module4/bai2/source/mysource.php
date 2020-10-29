<?php
class uploadFile
{
	function upload($local,$folder,$name)
	{
		if($local !='' && $folder!='' && $name!='')
		{
			
			$newname = $folder .'/'.$name;
			if(move_uploaded_file($local,$newname))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
	}
}

?>