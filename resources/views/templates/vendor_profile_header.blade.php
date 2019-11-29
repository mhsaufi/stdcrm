<style type="text/css">
	.tags {
		background: #888;
		color: #fff;
		padding: 8px 10px;
		font-size: 0.7em;
		border-radius: 5px;
		border: 0.1em solid #999;
		margin-right: 1px;      
	}

	.tags-space {
		/*background: blue;*/
		height: 2.3em;
		/*margin-top: 40px;*/
		margin-left: 300px;     
	}
</style>


<div class="section-padding">
	<div class="container">
		<div class="section-header">
			<div class="section-profile-img" id="uploader_trigger">
				@if(Auth::user()->dp == '')
				<img class="vend_pic" src="{{asset('myasset/img/default.jpeg')}}">
				@else
				<img class="vend_pic" src="{{asset('storage/'.Auth::user()->dp)}}">
				@endif
			</div>
			
	    	<div class="section-sub-header">
	    		<div class="half-vertical" style="background: #fff;">
	    			
	    		</div>
	    		<div class="half-vertical" style="background: #fff;">
	    			<div class="info-panel">
	    				<div>
		    				<h4 style="opacity: 0.8;color: #ff0068;">{{ Auth::user()->name }}</h4>
		    				<span style="font-style: italic;font-size: 1.1em ;color: grey;opacity: 0.7;">
			    				{{ Auth::user()->email }}
			    			</span>
			    		</div>
	    			</div>
    				<div class="rate-space">
    					 @php

			                $unrate = 5-$rate;

			                for($i = 0;$i < $rate;$i++){

			                  echo '<i class="fas fa-star star_rated" style="margin-right: 4px;"></i>';
			                }

			                for($i = 0;$i < $unrate;$i++){

			                  echo '<i class="fas fa-star star_unrated" style="margin-right: 4px;"></i>';
			                }

			              @endphp
    				</div>
	    		</div>
	    	</div>
	    	<div class="tags-space">
	    		@foreach($tag_list as $tag)
	    			<span class="tags">#{{ $tag['category']['cc_title'] }}</span>
	    		@endforeach
				
			</div>
	    </div>
	</div>
</div>