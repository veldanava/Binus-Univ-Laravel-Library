<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Borrow Book') }} "{{$book->title}}"
      </h2>
  </x-slot>


  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


              <div class="p-6 bg-white border-b border-gray-200">
                  <form method="POST" action="{{ route('loans.store', ['book' => $book->id]) }}">
                      @csrf
                      <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">How many copies would you like to borrow?</span>
                              <input type="number" name="number_borrowed" class="block w-full mt-1 rounded-md"
                                     placeholder="How many copies would you like to borrow?"
                                     value="{{old('number_borrowed')}}"/>
                          </label>
                          @error('number_borrowed')
                          <div class="text-sm text-red-600">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="mb-6">
                          <label class="block">
                              <span class="text-gray-700">Return date</span>
                              <input type="date" name="return_date" class="block w-full mt-1 rounded-md"
                                     placeholder="" value="{{old('return_date')}}"/>
                          </label>
                          @error('return_date')
                          <div class="text-sm text-red-600">{{ $message }}</div>
                          @enderror
                      </div>
                      <x-primary-button type="submit">
                          Submit
                      </x-primary-button>


                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
