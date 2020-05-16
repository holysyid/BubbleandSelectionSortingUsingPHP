<?php
Class fungsi{
	public $file,$data,$row;
	
	function __construct(){
	$this->file="smansaba2018.csv";
	$this->data=file_get_contents($this->file);
    $this->row=explode("\n",$this->data);
	}
				public function tampil_data(){
				$data=$this->row;
				// var_dump($data);die;
				return $data;
				}
				public function selection_sort($berapadata,$konfigurasi)
				{
						
				$data=$this->row;
				  //ubah count($data) ke limit yang mau dibuat
				for($i=0; $i<$berapadata; $i++) {
				  
				  for($j=$i+1; $j<$berapadata; $j++) {
				    //deklarasikan nis ke n dan nis ke n+1 disini
				    list($nis,$nama,$nilai1,$nilai2,$nilai3,$nilai4) =array_pad( explode (";",$data[$j]), 6, null);
				    if($konfigurasi["sort"]==1){
$nisj = $nis;
				    }elseif($konfigurasi["sort"]==2){
$nisj = $nama;
				    }
				    elseif($konfigurasi["sort"]==3){
$nisj = $nilai1;				    	
				    }
				    elseif($konfigurasi["sort"]==4){
$nisj = $nilai2;				    	
				    }
				    elseif($konfigurasi["sort"]==5){
$nisj = $nilai3;				    	
				    }else{
$nisj = $nilai4;				    	
				    }
				    list($nis,$nama,$nilai1,$nilai2,$nilai3,$nilai4) =array_pad( explode (";",$data[$i]), 6, null);
				    
 if($konfigurasi["sort"]==1){
$nisi = $nis;
				    }elseif($konfigurasi["sort"]==2){
$nisi = $nama;
				    }
				    elseif($konfigurasi["sort"]==3){
$nisi = $nilai1;				    	
				    }
				    elseif($konfigurasi["sort"]==4){
$nisi = $nilai2;				    	
				    }
				    elseif($konfigurasi["sort"]==5){
$nisi = $nilai3;				    	
				    }else{
$nisi = $nilai4;				    	
				    }
				    if ($konfigurasi["naikturun"]==1) {
				    if ($nisj<$nisi) {//acs
				        $t=$data[$i];
				        $data[$i]=$data[$j];
				        $data[$j]=$t;
				    		}	
				    }else{
				    if ($nisj>$nisi) { //decs
				        $t=$data[$i];
				        $data[$i]=$data[$j];
				        $data[$j]=$t;
				    }	
				    }
				    
				    
				  }
				}
				return $data;
				}

				public function bubble_Sort($berapadata,$konfigurasi)
				{
				$data=$this->row;
					
				  // var_dump(count($my_array));die;
				  do
				  {
				    $swapped = false;
				    for( $i = 0; $i < $berapadata-1; $i++ )
				    {
				      // var_dump($my_array[$i]);
				      list($nis,$nama,$nilai1,$nilai2,$nilai3,$nilai4) =array_pad( explode (";",$data[$i]), 6, null);
				     
				      if($konfigurasi["sort"]==1){
$nisj = $nis;
				    }elseif($konfigurasi["sort"]==2){
$nisj = $nama;
				    }
				    elseif($konfigurasi["sort"]==3){
$nisj = $nilai1;				    	
				    }
				    elseif($konfigurasi["sort"]==4){
$nisj = $nilai2;				    	
				    }
				    elseif($konfigurasi["sort"]==5){
$nisj = $nilai3;				    	
				    }else{
$nisj = $nilai4;				    	
				    }
				      list($nis,$nama,$nilai1,$nilai2,$nilai3,$nilai4) =array_pad( explode (";",$data[$i+1]), 6, null);
				      if($konfigurasi["sort"]==1){
$nisi = $nis;
				    }elseif($konfigurasi["sort"]==2){
$nisi = $nama;
				    }
				    elseif($konfigurasi["sort"]==3){
$nisi = $nilai1;				    	
				    }
				    elseif($konfigurasi["sort"]==4){
$nisi = $nilai2;				    	
				    }
				    elseif($konfigurasi["sort"]==5){
$nisi = $nilai3;				    	
				    }else{
$nisi = $nilai4;				    	
				    }
					if ($konfigurasi["naikturun"]==1) {				    
				      if( $nisj > $nisi) //acs
				      {
				        list( $data[$i + 1], $data[$i] ) =
				            array( $data[$i], $data[$i + 1] );
				        $swapped = true;
				      }
				  }else{
				      if( $nisj > $nisi) //decs
				      {
				        list( $data[$i + 1], $data[$i] ) =
				            array( $data[$i], $data[$i + 1] );
				        $swapped = true;
				      }
				  }
				    }
				  }
				  while( $swapped );
				return $data;
				}
				public function komparasi($konfigurasi){
				//buat fungsi komparasi data
						// var_dump($konfigurasi);die;

						$x=100;
						$hundred;
						$hundredfifty;
						$twohundred;
						$twohundredfifty;


						$hasil;
						// for ($i=0; $i<=3; $i++) { 
								

								$time2=microtime(true);
								$this->bubble_sort(100,$konfigurasi);
								$time_elapsed_bubble = microtime(true) - $time2;

								$time1=microtime(true);
								$this->selection_sort(100,$konfigurasi);
								$time_elapsed_selection=microtime(true)- $time1;
								
								$hundred= array($time_elapsed_bubble,$time_elapsed_selection);

								$time2=microtime(true);
								$this->bubble_sort(150,$konfigurasi);
								$time_elapsed_bubble = microtime(true) - $time2;

								$time1=microtime(true);
								$this->selection_sort(150,$konfigurasi);
								$time_elapsed_selection=microtime(true)- $time1;
								
								$hundredfifty= array($time_elapsed_bubble,$time_elapsed_selection);

								$time2=microtime(true);
								$this->bubble_sort(200,$konfigurasi);
								$time_elapsed_bubble = microtime(true) - $time2;

								$time1=microtime(true);
								$this->selection_sort(200,$konfigurasi);
								$time_elapsed_selection=microtime(true)- $time1;
								
								$twohundred= array($time_elapsed_bubble,$time_elapsed_selection);

								$time2=microtime(true);
								$this->bubble_sort(250,$konfigurasi);
								$time_elapsed_bubble = microtime(true) - $time2;

								$time1=microtime(true);
								$this->selection_sort(250,$konfigurasi);
								$time_elapsed_selection=microtime(true)- $time1;
								
								$twohundredfifty= array($time_elapsed_bubble,$time_elapsed_selection);

								$hasil = array(
									$hundred,
									$hundredfifty,
									$twohundred,
									$twohundredfifty);
								
						// var_dump($hasil['hundred']);die;
						return $hasil;
				}
}
?>