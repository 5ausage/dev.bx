<?php

function getDirectoryStatus($Path, $Output)
{
	if($Folder = opendir($Path)) {

		while(false !== ($Data = readdir($Folder)))
		{
			if($Data != "." && $Data != "..")
			{

				$CurrentPath = $Path.'/'.$Data;

				if (is_dir($CurrentPath))
				{
					$Output['dirs'][$Data]['is_readable'] = is_readable($CurrentPath);
					$Output['dirs'][$Data]['is_writable'] = is_writable($CurrentPath);

				}

				elseif (is_file($CurrentPath))
				{
					$Output['files'][$Data]['is_readable'] = is_readable($CurrentPath);
					$Output['files'][$Data]['is_writable'] = is_writable($CurrentPath);
					$Output['files'][$Data]['size'] = filesize($CurrentPath);
				}
			}
		}

		closedir($Folder);
		return $Output;
	}
	else return null;
}