{{-- <div>
	<div class="d-flex justify-content-between align-content-center mb-4">
		<div>
			Search
		</div>

		<div class="d-flex">
			<div>
				<div class="d-flex align-items-center ml-4">
					<label for="paginate" class="text-nowrap mr-2 mb-0">Per page</label>
					<select name="paginate" id="paginate" class="form-control" wire:model="paginate">
						<option value="20">20</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>
				</div>
			</div>
			<div>
				@if (count($checked))
					<div class="dropdown ml-4">
						<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
							With Checked ({{ count($checked) }})
						</button>

						<div class="dropdown-menu">
							<a href="#" class="dropdown-item" wire:model="deleteChecked">Delete</a>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
    <table class="table table-striped table-responsive">
    	<thead>
    		<tr>
    			<td></td>
    			@foreach($columns as $column)
    				<th>
    					{{ $column }}
    				</th>
    			@endforeach
    		</tr>
    	</thead>

    	<tbody>
    		@foreach($this->records() as $record)
    			<tr class="@if ($this->isChecked($record)) table-primary @endif">
    				<td>
	    				<input type="checkbox" value="{{ $record->id }}" wire:model="checked">
	    			</td>
    				@foreach($columns as $column)
	    				<td>
	    					{{ $record->{$column} }}
	    				</td>
    				@endforeach
    			</tr>
    		@endforeach
    	</tbody>
    	
    </table>
    {{ $this->records()->links() }}
</div>
 --}}
<div>

	<div data-section-id="2" data-category="__structures" data-component-id="73a6_23_02_awz" class="flex flex-wrap -mx-4 -mb-4 md:mb-0 pt-6 px-8" data-container="1">
        <div class="w-full md:w-1/2 px-6 mb-4 md:mb-0" data-bucket="1">
			<div data-section-id="4" data-category="__forms" data-component-id="73a6_25_02_awz" class="mb-6">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="" data-config-id="02_label">Search </label>
				{{-- <input class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" type="text" name="field-name" placeholder="Write a text" data-config-id="02_input"> --}}
				<input type="search"
						class="w-full pl-10 pr-4 py-2 px-4 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-normal"
						placeholder="Search..." name="query" id="query" wire:model="query">
			</div>
      	</div>
        <div class="w-full md:w-1/2 px-6 mb-4 md:mb-0" data-bucket="2">
			<div data-section-id="3" data-category="__forms" data-component-id="73a6_25_02_awz" class="mb-6">
				<label class="block text-gray-700 text-sm font-bold mb-2" for="" data-config-id="02_label">Per page</label>
				<select name="paginate" id="paginate" class="w-full pl-10 pr-4 py-2 px-4 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-normal" wire:model="paginate">
					<option value="20">20</option>
					<option value="50">50</option>
					<option value="100">100</option>
				</select>
			</div>
			<div>
				@if (count($checked))
				 	<button type="button" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">
			            <span>With Checked ({{ count($checked) }})</span>
			            <!--
			              Heroicon name: chevron-down

			              Item active: "text-gray-600", Item inactive: "text-gray-400"
			            -->
			            <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">
			              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
			            </svg>
		          	</button>

					<div class="absolute -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
			            <div class="rounded-lg shadow-lg">
			              	<div class="rounded-lg shadow-xs overflow-hidden">
				                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
				                  <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150" wire:click="deleteChecked">
				                    <!-- Heroicon name: chart-bar -->
				                    <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
				                    </svg>
				                    <div class="space-y-1">
				                      <p class="text-base leading-6 font-medium text-gray-900">
				                        Delete
				                      </p>
				                    </div>
				                  </a>
				                  
			                  	</div>
			                </div>
		              	</div>
	            	</div>
				@endif
			</div>
      	</div>
  	</div>

	<div class="flex flex-col">
	  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
	    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
	      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
			
			

	        <table class="min-w-full divide-y divide-gray-200 stripe">
	          <thead>
	            <tr>
	              	<th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wide"></th>
	    			@foreach($columns as $column)
	    				<th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wide">
	    					{{ $column }}
	    				</th>
	    			@endforeach
	            </tr>
	          </thead>
	          <tbody class="bg-white divide-y divide-gray-200">
	    		@foreach($this->records() as $record)
	    			<tr class="@if ($this->isChecked($record)) bg-gray-200 @endif">
	    				<td class="text-sm leading-5 font-medium text-gray-900">
		    				<input type="checkbox" class="ml-4" value="{{ $record->id }}" wire:model="checked">
		    			</td>
	    				@foreach($columns as $column)
		    				<td class="px-6 py-4 whitespace-no-wrap">
		    					<div class="text-sm  h-5 leading-5 font-medium text-gray-600">
			                     	{{ $record->{$column} }}
			                    </div>
		    				</td>
	    				@endforeach
	    			</tr>
	    		@endforeach

	            <!-- More rows... -->
	          </tbody>
	        </table>
	        
	      </div>
	    </div>
	  </div>
	</div>
	<div class="mx-8 px-6 py-10 text-indigo-300">
    	{{ $this->records()->links() }}
    </div>
</div>
