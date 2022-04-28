<?php 
$sections = [
        [
            'title' => "DC Comics",
            'links' => [
                [
                    'href'=> "#",
                    'text'=> "Characters",
                ],
                [
                    'href'=> "#",
                    'text'=> "Comics",
                ],
                [
                    'href'=> "#",
                    'text'=> "Movies",
                ],
                [
                    'href'=> "#",
                    'text'=> "TV",
                ],
                [
                    'href'=> "#",
                    'text'=> "Games",
                ],
                [
                    'href'=> "#",
                    'text'=> "Videos",
                ],
                [
                    'href'=> "#",
                    'text'=> "News",
                ],
            ]
        ],
        [
            'title' => "Shop",
            'links' => [
                [
                    'href'=> "#",
                    'text'=> "Shop DC",
                ],
                [
                    'href'=> "#",
                    'text'=> "Shop DC Colletibles",
                ],
            ]
        ],
        [
            'title' => "DC",
            'links' => [
                [
                    'href'=> "#",
                    'text'=> "Term of use",
                ],
                [
                    'href'=> "#",
                    'text'=> "Privacy policy (New)",
                ],
                [
                    'href'=> "#",
                    'text'=> "Ad Choices",
                ],
                [
                    'href'=> "#",
                    'text'=> "Advertising",
                ],
                [
                    'href'=> "#",
                    'text'=> "Jobs",
                ],
                [
                    'href'=> "#",
                    'text'=> "Subscriptions",
                ],
                [
                    'href'=> "#",
                    'text'=> "Talent Workshops",
                ],
                [
                    'href'=> "#",
                    'text'=> "CPSC Certifications",
                ],
                [
                    'href'=> "#",
                    'text'=> "Ratings",
                ],
                [
                    'href'=> "#",
                    'text'=> "Shop Help",
                ],
                [
                    'href'=> "#",
                    'text'=> "Contact Us",
                ],
            ]
        ],
        [
          'title' => "Sites",
          'links' => [
            [
                'href'=> "#",
                'text'=> "DC",
            ],
            [
                'href'=> "#",
                'text'=> "MAD Magazine",
            ],
            [
                'href'=> "#",
                'text'=> "DC Kids",
            ],
            [
                'href'=> "#",
                'text'=> "DC Universe",
            ],
            [
                'href'=> "#",
                'text'=> "DC Power Visa",
            ]
          ],
        ],
      ]
?>

<footer>
    <div class="container">
      <div id="links">
        @foreach ($sections as $item)
            <section>
                <h1>{{$item['title']}}</h1>
                <ul>
                    @foreach ($item['links'] as $link)
                        <ul>
                            <li><a href="{{$link['href']}}">{{$link['text']}}</a></li>
                        </ul>
                    @endforeach
                </ul>
            </section>
        @endforeach
      </div>
      <img src="{{asset('images/dc-logo-bg.png')}}" alt="logo dc" />
    </div>
  </footer>
  <div id="bottombar">
    <div class="container">
      <a href="#">SIGN-UP NOW!</a>
      <div id="social">
        <h1>FOLLOW US</h1>
        <a href="#"
          ><img src="{{asset('images/footer-facebook.png')}}" alt="logo facebook"
        /></a>
        <a href="#"
          ><img src="{{asset('images/footer-twitter.png')}}" alt="logo twitter"
        /></a>
        <a href="#"
          ><img src="{{asset('images/footer-youtube.png')}}" alt="logo youtube"
        /></a>
        <a href="#"
          ><img src="{{asset('images/footer-pinterest.png')}}" alt="logo pinterest"
        /></a>
        <a href="#"
          ><img src="{{asset('images/footer-periscope.png')}}" alt="logo periscope"
        /></a>
      </div>
    </div>
  </div>