<?php 

/**
* 
*/
class place
{
	
	public function help()
	{
		
	}

	private function get_type($data=false)
	{
		if(isset($data['type'])){

			switch ($data['type']) {
				case 'people':
					$type = 'people';
					break;
				case 'places':
					$type = 'places';
					break;
				case 'things':
					$type = 'things';
					break;			
			}
		}else{
			$rand = rand(1,3);
			if($rand == 1){
				$type = 'people';
			}else if($rand == 3){
				$type = 'places';
			}else {
				$type = 'things';
			}			
		}
		return $type;
	}

	public function get($data)
	{
		$counter = 0;
		$block = array();
		$callBlock = '';
		if(isset($data['w'])){
			array_push($block, 'w='.$data['w']);
		}

		if(isset($data['h'])){
			array_push($block, 'h='.$data['h']);
		}
		if(isset($data['type'])){
			$type = $this->get_type(array('type'=>$data['type'], ));
		}else{
			$type = $this->get_type();
		}

		if(isset($data['txtclr'])){
			$txtclr = $data['txtclr'];
		}else{
			$txtclr = '000';
		}

		if(isset($data['txt'])){
			$text = '&txt='.$data['txt'].'&txtclr='.$txtclr;
			array_push($block, 'txt='.$data['txt'].'&txtclr='.$txtclr);
		}

		if(isset($data['random'])){
			//$random = '&random='.$data['random'];
			array_push($block, 'random='.$data['random']);
		}

		if(isset($data['overlay'])){
			$overlay = '&overlay_color='.$data['overlay'];
		}

		foreach($block as $b){
			
			//echo $counter;
			if($counter < 1){
				$callBlock.='?'.$b;
				$counter++;
			}else{
				$callBlock.='&'.$b;
			}
		}
		//echo $callBlock;

		$img = 'https://placem.at/'.$type.''.$callBlock;
		return $img;
	}
}

?>