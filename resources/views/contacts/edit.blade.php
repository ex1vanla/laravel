<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            編集画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form method="POST" action="{{ route('contacts.store')}}">
                    @csrf
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                  <input type="text" id="name" name="name"  value="{{$contact->name}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                  <input type="text" id="title" name="title" value="{{$contact->title}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                  <input type="email" id="email" name="email" value="{{$contact->email}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="url" class="leading-7 text-sm text-gray-600">URL</label>
                                  <input type="text" id="url" name="url" value="{{$contact->url}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label  class="leading-7 text-sm text-gray-600">性別</label><br>
                                  <input type="radio" name="gender" value="0">男性
                                  <input type="radio" name="gender" value="1">女性
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                  <select name="age">
                                    <option value="">選択してください</option>
                                    <option value="1">~19</option>
                                    <option value="2">20~29</option>
                                    <option value="3">30~39</option>
                                    <option value="4">40~59</option>
                                    <option value="5">50~59</option>
                                    <option value="6">60~</option>
                                  </select> 
                                </div>
                              </div>                            
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ</label>
                                  <textarea id="contact" name="contact"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{$contact->contact}}</textarea>
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution"> 注意事項同意
                                </div>
                              </div>
                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
