<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body class="bg-gray-ligth font-sans">
  <div class="container mx-auto flex items-center p-4">
    <nav class="w-2/5">
      <a href="#" class="text-sm mr-4 font-semibold pb-6 text-gray-700 border-b-2 border-solid border-transparent hover:text-blue-500 hover:border-blue-500"><i class="fa fa-home fa-lg"></i> Home</a>
      <a href="#" class="text-sm mr-4 font-semibold pb-6 text-gray-700 border-b-2 border-solid border-transparent hover:text-blue-500 hover:border-blue-500"><i class="fa fa-bolt fa-lg"></i> Moments</a>
      <a href="#" class="text-sm mr-4 font-semibold pb-6 text-gray-700 border-b-2 border-solid border-transparent hover:text-blue-500 hover:border-blue-500"><i class="fa fa-bell fa-lg"></i> Notifications</a>
      <a href="#" class="text-sm mr-4 font-semibold pb-6 text-gray-700 border-b-2 border-solid border-transparent hover:text-blue-500 hover:border-blue-500"><i class="fa fa-envelope fa-lg"></i> Messages</a>
    </nav>
    <div class="w-1/5 text-center"><i class="fa fa-twitter fa-lg text-blue-400"></i></div>
    <div class="w-2/5 flex justify-end">
       <div class="mr-4 relative">
         <input type="text" class="bg-gray-100 h-8 px-4 py-2 text-sm w-48 rounded-full mt-1" placeholder="Search Twitter">
          <span class="absolute right-0 p-2 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd" 
              />
            </svg>
         </span>
       </div>
       <div>
          <a href="#"><img src="/img/Tiwter photo.jpeg" alt="MyProfile" class="w-8 h-8 rounded-full mr-4 mt-1"></a>
        </div>
       <div>
         <button  type="submit" class="bg-blue-500 w-18 rounded-full font-medium text-white py-2 px-4 mb-4 hover:bg-blue-600">Tweet</button>
       </div>
    </div>
  </div> <!--end dev conatier -->

  <div class="bg-[url('/img/tailwind_bg.jpeg')] h-64"></div> <!--bg img -->

  <div class="bg-white shadow mt-1">
    <div class="container mx-auto flex items-center relative bg-gray-100">
      <div class="w-1/4">
         <img src="/img/Tiwter photo.jpeg" alt="Osamn Profiel" class="rounded-full h-40 w-40 absolute  -mt-24">
      </div>
      <div class="w-1/2">
       <ul class="list-reset flex">
            <li class="text-center py-3 px-4 border-b-2 border-solid border-blue-500">
                <a href="#" class="text-gray-700 hover:no-underline">
                    <div class="text-sm font-bold tracking-tight mb-1">Tweet</div>
                    <div class="text-lg tracking-tight font-blod text-blue-500">60</div>
                </a>
            </li>
            <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-blue-500">
                <a href="#" class="text-gray-700 hover:no-underline">
                  <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                  <div class="text-lg tracking-tight font-blod hover:text-blue-500">4</div>
                </a>
            </li>
            <li class="text-center py-3 px-4 border-b-2 border-solid border-transparent hover:border-blue-500">
                <a href="#" class="text-gray-700 hover:no-underline">
                  <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                  <div class="text-lg tracking-tight font-blod ">461</div>
                </a>
            </li>
            <li class="text-center py-3 px-4 border-b-2 border- border-transparent hover:border-blue-500">
                <a href="#" class="text-gray-700 hover:no-underline">
                  <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                  <div class="text-lg tracking-tight font-blod ">10</div>
                </a>
            </li>
            <li class="text-center py-3 px-4 border-b-2 border- border-transparent hover:border-blue-500">
                <a href="#" class="text-gray-700 hover:no-underline">
                  <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                  <div class="text-lg tracking-tight font-blod ">20</div>
                </a>
            </li>
       </ul>
      </div>
      <div class="w-1/4 flex justify-end items-center">
        <div><button class="bg-blue-500 rounded-full text-white font-medium w-18 py-2 px-4 hover:bg-blue-600 mr-4">Following</button></div>
        <div>
          <a href="#" class="text-gray-600 ml-2"><i class="fa fa-ellipsis-v fa-lg"></i></a>
        </div>
    </div>
  </div> <!--End Container -->
  <div class="container mx-auto flex mt-3 text-sm">
      <div class="w-1/4 pr-6 mt-8 mb-4">
        <h1><a href="#" class="text-black font-bold hover:underline hover:text-blue-500">Osman || عوصمان </a></h1>
        <div class="mb-4"><a href="#" class="text-gray-700 text-sm">@osman_ali</a></div>

        <div class="mb-4">
          ‏‏ Computer Programming || Coding || Logical Thinking || Problem-Solving || Anime Funs || Reader || Writing About Technology
        </div>

        <div class="mb-2">
          <i class="fa fa-link fa-sm  mr-1"></i>
          <a href="#" class="text-blue-500">https://www.osman.com</a>
        </div>
        <div class="mb-4">
          <i class="fa fa-calendar fa-sm text-gray-700 mr-2"></i>
          <a href="#" class="text-gray-800">Joined July 2017</a>
        </div>
        <div class="mb-4">
          <i class="fa fa-map-marker text-gray-700 mr-2"></i>
          <a href="#" class="text-gray-800">انا عنواني عيونك انتي</a>
        </div>
        <div class="mb-4">
          <button class="bg-blue-500 text-white rounded-full font-medium w-full h-10 hover:text-blue-600">
            Tweet in عوصمان timeline
          </button>
        </div>
        <div class="mb-4"><i class="fa fa-user fa-lg text-gray-500 mr-2"></i><a href="#" class="text-blue-500">27 Followers you know</a></div>
        <div class="mb-6 flex justify-between">
          <a href="#"><img src="/img/safary.jpeg" alt="user"  class="rounded-full h-12 w-12"></a>
          <a href="#"><img src="/img/follow12.jpeg" alt="user"  class="rounded-full h-12 w-12"></a>
          <a href="#"><img src="/img/follow7.jpeg" alt="user"  class="rounded-full h-12 w-12"></a>
          <a href="#"><img src="/img/fol5.jpeg" alt="user"  class="rounded-full h-12 w-12"></a>
          <a href="#"><img src="/img/foolow6.jpeg" alt="user"  class="rounded-full h-12 w-12 "></a>
          <a href="#"><img src="/img/follower2.jpeg" alt="user"  class="rounded-full h-12 w-12"></a>  
        </div>
        <div class="mb-4"><i class="fa fa-picture-o fa-lg text-gary-500 mr-2"></i><a href="#" class="text-blue-500">Photos and videos</a></div>

        <div class="mb-4 flex justify-between">
          <a href="#"><img src="/img/photo1.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
          <a href="#"><img src="/img/photo2.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
          <a href="#"><img src="/img/photo3.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
        </div>
    </div>
    <div class="w-1/2 bg-gray-100 mb-4">
        <div class="p-3 text-lg font-bold border-b border-solid  border-grey-light">
          <a href="#" class="text-black mr-6">Tweets</a>
          <a href="#" class="mr-6 text-blue-500">Tweets &amp; Replies</a>
          <a href="#" class="text-blue-500">Media</a>
        </div>

        <div class="flex border-b border-solid border-grey-light">
          <div class="w-1/8 text-right pl-3 pt-3">
              <div><i class="fa fa-thumb-tack text-teal mr-2"></i></div>
              <div><a href="#"><img src="/img/Tiwter photo.jpeg" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
          </div>
          <div class="w-7/8 p-3 pl-0">
              <div class="text-xs text-grey-dark">Pinned Tweet</div>
              <div class="flex justify-between">
                  <div>
                      <span class="font-bold"><a href="#" class="text-black">Osman || عوصمان</a></span>
                      <span class="text-grey-dark">@osman_ali</span>
                      <span class="text-grey-dark">&middot;</span>
                      <span class="text-grey-dark">15 Dec 2017</span>
                  </div>
                  <div>
                    <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                  </div>
              </div>
              <div>
                <div class="mb-4">
                  <p class="mb-6">🎉 My New Framework Osman-CSS v0.1.0 is out!</p>
                  <p class="mb-6">Makes `apply` more useful when using !important utilities, and includes an improved default color</p>
                  <p class="mb-4"><a href="#" class="text-blue-500">github.com/CS.Osman/ta...</a></p>
                  <p><a href="#"><img src="/img/scott-webb-bmmcfZqSjBU-unsplash.jpg" alt="tweet image" class="border border-solid border-grey-light rounded-sm"></a></p>
                </div>

                <div class="pb-2 flex justify-between">
                  <span class="mr-8"><a href="#" class="text-grey-dark  hover:text-blue-light"><i class="fa fa-comment fa-lg mr-4"></i> 9</a></span>
                  <span class="mr-8"><a href="#" class="text-green-500 hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 29</a></span>
                  <span class="mr-8"><a href="#" class="text-red-500 hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 135</a></span>
                  <span class="mr-8"><a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                </div>
              </div>
          </div> 
        </div>

        <div class="flex border-b border-solid border-grey-light">

          <div class="w-1/8 text-right pl-3 pt-3">
              <div><i class="fa fa-retweet text-grey-dark mr-2"></i></div>
              <div><a href="#"><img src="/img/safary.jpeg" alt="avatar" class="rounded-full h-12 w-12 mr-2"></a></div>
          </div>

          <div class="w-7/8 p-3 pl-0">
              <div class="text-xs text-grey-dark">عوصمان Retweeted</div>
              <div class="flex justify-between">
                  <div>
                      <span class="font-bold ml-2"><a href="#" class="text-black">Safary 33</a></span>
                      <span class="text-grey-dark">@eggheadio</span>
                      <span class="text-grey-dark">&middot;</span>
                      <span class="text-grey-dark">29 DEC 2021</span>
                  </div>
                  <div>
                      <a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-chevron-down"></i></a>
                  </div>
              </div>
              <div>
                  <div class="mb-4">
                      <p class="mb-6 ml-2">Create a Responsive Card Component by Composing Tailwind's Utility Classes - <a href="#">#html</a> lesson by <a href="#">@simonswiss</a></p>
                      <div class="flex border border-solid border-grey-light rounded">
                          <div class="w-1/4">
                              <img src="/img/tweet4.jpg" alt="image">
                          </div>
                          <div class="w-3/4 p-3">
                              <div class="font-bold mb-1">egghead Lesson: Abstract utility classes to ...</div>
                              <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptate tempore itaque culpa hic qui nostrum, minus harum cupiditate a voluptatibus.
                              <div class="text-grey-dark">egghead.io</div>
                          </div>
                      </div>

                  </div>
                  <div class="pb-2 flex justify-between">
                    <span class="mr-8"><a href="#" class="text-grey-dark  hover:text-blue-light"><i class="fa fa-comment fa-lg mr-4"></i> 9</a></span>
                    <span class="mr-8"><a href="#" class="text-green-500 hover:text-green"><i class="fa fa-retweet fa-lg mr-2"></i> 29</a></span>
                    <span class="mr-8"><a href="#" class="text-red-500 hover:text-red"><i class="fa fa-heart fa-lg mr-2"></i> 135</a></span>
                    <span class="mr-8"><a href="#" class="text-grey-dark hover:text-teal"><i class="fa fa-envelope fa-lg mr-2"></i></a></span>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="w-1/4 pl-4">
      <div class="bg-white p-3 mb-3">
        <div>
          <span class="text-lg font-bold ">Who to follow</span>
          <span>&middot;</span>
          <span><a href="#" class="text-xs text-blue-500">Refresh</a></span>
          <span>&middot;</span>
          <span><a href="#" class="text-xs text-blue-500">View All</a></span>
        </div>
        <div class="flex border-b border-solid border-grey-light">
          <div class="py-2">
              <a href="#"><img src="/img/follow1.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
          </div>
          <div class="pl-2 py-2 w-full mb-4">
              <div class="flex justify-between mb-2">
                  <div>
                      <a href="#" class="font-bold text-black">Nuxt.js</a> <a href="#" class="text-grey-dark">@nuxt_js</a>
                  </div>

                  <div>
                      <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                  </div>
              </div>
              <div>
                  <button class="bg-white text-blue-500 text-xs hover:bg-blue-600  font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                    Follow
                  </button>
              </div>
          </div>
        </div>

        <div class="flex border-b border-solid border-grey-light mb-4">
          <div class="py-2">
              <a href="#"><img src="/img/follow2.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
          </div>
          <div class="pl-2 py-2 w-full">
              <div class="flex justify-between mb-1">
                  <div>
                    <a href="#" class="font-bold text-black">Laracon EU</a> <a href="#" class="text-grey-dark">@LaraconEU</a>
                  </div>

                  <div>
                      <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                  </div>
              </div>
              <div>
                <button class="bg-white text-blue-500 text-xs hover:bg-blue-600 font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                    Follow
                </button>
              </div>
          </div>
        </div>

        <div class="flex border-b border-solid border-grey-light">
          <div class="py-2">
              <a href="#"><img src="/img/follow3.jpg" alt="follow1" class="rounded-full h-12 w-12"></a>
          </div>
          <div class="pl-2 py-2 w-full mb-4">
              <div class="flex justify-between mb-1">
                  <div>
                    <a href="#" class="font-bold text-black">Laracon</a> <a href="#" class="text-grey-dark">@LaraconEU</a>
                  </div>

                  <div>
                      <a href="#" class="text-grey hover:text-grey-dark"><i class="fa fa-times"></i></a>
                  </div>
              </div>
              <div>
                <button class="bg-white text-blue-500 text-xs hover:bg-blue-600 font-semibold hover:text-white py-2 px-6 border border-teal hover:border-transparent rounded-full">
                    Follow
                </button>
              </div>
          </div>
        </div>
        
        <div class="flex border-b border-solid border-grey-light">
            <div>
                <a href="#" class="p-2"><img src="/img/outlook.png" alt="follow1" class="rounded h-6 w-6"></a>
            </div>
            <div class="pl-2 py-2 w-full">
              <div class="flex justify-between">
                  <div>
                      <a href="#" class="font-bold text-black mt-4">Find people you know</a>
                  </div>
              </div>
              <div class="text-xs">
                  Import your contacts from Outlook
              </div>
            </div>
        </div>
        <div class="pt-2">
          <a href="#" class="text-sm text-blue-500">Connect other address book</a>
        </div>
      </div>

      <div class="bg-white p-3 mb-3">
        <div class="mb-3">
            <span class="text-lg font-bold">Trends for you</span>
            <span>&middot;</span>
            <span><a href="#" class="text-xs text-blue-500">Change</a></span>
        </div>

        <div class="mb-3 leading-tight">
            <div><a href="#" class="font-bold">#AttackOnTatin</a></div>
            <div><a href="#" class="text-grey-dark text-xs">645K Tweets</a></div>
        </div>

        <div class="mb-3 leading-tight">
            <div><a href="#" class="font-bold">Happy 2022</a></div>
            <div><a href="#" class="text-grey-dark text-xs">Riyadh 2022 Celebrations</a></div>
        </div>

        <div class="mb-3 leading-tight">
            <div><a href="#" class="font-bold">#ByeBye2021</a></div>
            <div><a href="#" class="text-grey-dark text-xs">21.7K Tweets</a></div>
        </div>

        <div class="mb-3 leading-tight">
            <div><a href="#" class="font-bold">#OnePiece</a></div>
            <div><a href="#" class="text-grey-dark text-xs">45K Tweets</a></div>
        </div>

        <div class="mb-3 leading-tight">
            <div><a href="#" class="font-bold">Something Trending</a></div>
            <div><a href="#" class="text-grey-dark text-xs">36K Tweets</a></div>
        </div>

        <div class="mb-3 leading-tight">
            <div><a href="#" class="font-bold">#SomeHashTag</a></div>
            <div><a href="#" class="text-grey-dark text-xs">100K Tweets</a></div>
        </div>

    </div>

    <div class="mb-3 text-xs">
        <span class="mr-2"><a href="#" class="text-grey-darker">&copy; 2018 Twitter</a></span>
        <span class="mr-2"><a href="#" class="text-grey-darker">About</a></span>
        <span class="mr-2"><a href="#" class="text-grey-darker">Help Center</a></span>
        <span class="mr-2"><a href="#" class="text-grey-darker">Terms</a></span>
        <span class="mr-2"><a href="#" class="text-grey-darker">Privacy policy</a></span>
        <span class="mr-2"><a href="#" class="text-grey-darker">Cookies</a></span>
        <span class="mr-2"><a href="#" class="text-grey-darker">Ads info</a></span>
    </div>
    </div>
  </div>
</body>
</html>