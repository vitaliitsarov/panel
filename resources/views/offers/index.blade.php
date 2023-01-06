<x-app-layout>
    <x-slot name="header">
		<div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Офферы
			</h2>

			<!-- Modal toggle -->
			<button data-modal-target="default" data-modal-toggle="addedOffer" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
			Добавить оффер
			</button>
		</div>
    </x-slot>

	<div class="overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
		<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
			<div class="p-3 flex items-center justify-between pb-4 bg-white dark:bg-gray-900">
				<div>
					<button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
						<span class="sr-only">Action button</span>
						Действие
						<svg class="w-3 h-3 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
					</button>
					<!-- Dropdown menu -->
					<div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
						<ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Включить</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Отключить</a>
							</li>
						</ul>
						<div class="py-1">
							<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Удалить</a>
						</div>
					</div>
				</div>
				<label for="table-search" class="sr-only">Search</label>
				<div class="relative">
					<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
						<svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
					</div>
					<input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Поиск">
				</div>
			</div>
			<!-- Table -->
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="p-4">
							<div class="flex items-center">
								<input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
								<label for="checkbox-all-search" class="sr-only">checkbox</label>
							</div>
						</th>
						<th scope="col" class="px-6 py-3">
							Название
						</th>
						<th scope="col" class="px-6 py-3">
							Position
						</th>
						<th scope="col" class="px-6 py-3">
							Статус
						</th>
						<th scope="col" class="px-6 py-3">
							Действие
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($offers as $value)
						<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
							<td class="w-4 p-4">
								<div class="flex items-center">
									<input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
									<label for="checkbox-table-search-2" class="sr-only">checkbox</label>
								</div>
							</td>
							<th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
								<img class="w-10 h-10 rounded-full object-contain" src="{{ $value->image }}" alt="{{ $value->name }}">
								<div class="pl-3">
									<div class="text-base font-semibold">{{ $value->name }}</div>
									<div class="font-normal text-gray-500">thomes@flowbite.com</div>
								</div>
							</th>
							<td class="px-6 py-4">
								UI/UX Engineer
							</td>
							<td class="px-6 py-4">
								<div class="flex items-center">
									@if ($value->status == 'active')
										<div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div> Online
									@else
										<div class="h-2.5 w-2.5 rounded-full bg-red-500 mr-2"></div> Offline
									@endif
								</div>
							</td>
							<td class="px-6 py-4">
								<form action="{{ route('offers.destroy', $value->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-indigo-400 border border-indigo-400">Edit</a>
									<button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">Delete</a>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
    </div>



	<!-- Main modal -->
	<div id="addedOffer" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
		<div class="relative w-full h-full max-w-2xl md:h-auto">
			<!-- Modal content -->
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<!-- Modal header -->
				<div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
					<h3 class="text-xl font-semibold text-gray-900 dark:text-white">
						Добавление нового оффера
					</h3>
					<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
						<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						<span class="sr-only">Close modal</span>
					</button>
				</div>
				<!-- Modal body -->
				<form method="POST" action="{{ route('offers.store') }}">
				@csrf
				<div class="p-6 space-y-6">
					<div class="mb-6">
						<label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название</label>
						<input type="text" id="text" name="name" value="{{ old('name') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="В рот мне ноги">
					</div>
					<div class="mb-6">
						<label for="offer_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ид в партнёрской программе</label>
						<input type="number" id="offer_id" min="0" step="1" name="offer_id" value="{{ old('offer_id') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Ид в партнёрской программе">
					</div>
					<div class="mb-6">
						<label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Изображение</label>
						<input type="text" id="image" name="image" value="{{ old('image') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Ссылка на изображение">
					</div>
					<div class="mb-6">
						<label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ссылка</label>
						<input type="text" id="url" name="url" value="{{ old('url') }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Ссылка на оффер">
					</div>
					<div class="mb-6">
						<label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Статус</label>
						<select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
							<option selected>Выберите статус</option>
							<option value="active" @if(old('status') == 'active') selected @endif>Включен</option>
							<option value="unactive"  @if(old('status') == 'unactive') selected @endif>Отключен</option>
						</select>
					</div>
					<div class="mb-6">
						<label for="offer_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Тип</label>
						<select id="offer_type" name="offer_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
							<option selected>Выберите тип</option>
							<option value="1" @if(old('offer_type') == 1) selected @endif>Микрозаймы</option>
						</select>
					</div>
					<div class="mb-6">
						<label for="sort" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Позиция в списке</label>
						<input type="number" min="0" step="1" id="sort" name="sort" value="{{ old('sort', 0) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
					</div>
				</div>
				<!-- Modal footer -->
				<div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
					<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Добавить</button>
					<button data-modal-hide="addedOffer" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Закрыть</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>
