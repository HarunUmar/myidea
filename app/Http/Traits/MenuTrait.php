<?php
	namespace App\Http\Traits;

	use App\Kategori;
	use App\SubKategori;
	use Auth;

	trait MenuTrait{
		public function Menu()
	    {
	    	$kategori = Kategori::where('status_aktif','1')->get();
	    	$index = 0;
	    	foreach ($kategori as $key ) {
	    		$find = SubKategori::where(['status_aktif' => '1', 'kategori_id' => $key->id ])->get();
	    		$kategori[$index]['SubMenu'] = $find;
	    	$index++;
	    	}

	    	return $kategori;
	    }

	    public function BuildMenu()
	    {	
			if(Auth::User()->level_id == "2"){
				$menu = $this->Menu();
		    	$html = "<ul class='navbar-nav' style='margin-left: -8px;'>";
		    	$idNav = 0;
		    	foreach ($menu as $key ) {
		    		$jumSubMenu = $key->SubMenu->count();
		    		$dropdown = ($jumSubMenu > 0) ? 'dropdown' : '';
		    		$proplink = ($jumSubMenu > 0 ) ? "id='navbarDropdownMenuLink' 
		    										  role='button' 
		    										  data-toggle='dropdown' 
		    										  aria-haspopup='true' aria-expanded='false'
		    										  class='nav-link dropdown-toggle text-white' " : " class='nav-link text-white' ";

		    		$html .= "<li class='nav-item $dropdown'>
		    					  <a href='".$key->route."' $proplink>Jasa ".$key->kategori."</a>";
		    				   
		    				   if($jumSubMenu > 0){
		    				   	 $html .= "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
		    				   	 		
		    				   	 	foreach ($key->SubMenu as $keySubMenu) {
		    				   	 		$html .= "<a class='dropdown-item' href='".$keySubMenu->route."'>".$keySubMenu->sub_kategori."</a>";
		    				   	 	}
		    				   	 $html .= "</div>";
		    				   }
		    		$html .= "</li>"; 
		    	$idNav++;
		    	}
		    	$html .= "</ul>";
			}else{
				$html = "";
			}
			
	    	return $html;
	    }

	}
	