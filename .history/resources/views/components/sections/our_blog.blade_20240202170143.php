<section class="our_blog_area">
    <div class="container">
      <div class="main_title">
        <h3 style="font-weight: bolder;">Go Global and Discover the World</h3>
        <p style="margin-top: 10px; font-size: 12px; font-weight: bold">Experience an invaluable collection of original business content produced by our dedicated in-house team of e-commerce and global logistics experts.</p>
      </div>
      <div class="row our_blog_inner">
        @php
            $discover =
                [
                    [
                        'image' => 'discover1.jpeg',
                        'title' => 'Discover Global Markets'
                    ],
                    [
                        'image' => 'discover2.jpeg',
                        'title' => 'Discover the Latest E-Commerce Trends'
                    ],
                    [
                        'image' => 'discover3.jpeg',
                        'title' => 'Discover New Opportunities'
                    ],
                    [
                        'image' => 'discover4.jpeg',
                        'title' => 'Discover the Secrets of Enterpreneurship'
                    ],
                ]
        @endphp

        @foreach ($discover as $item)
            <div class="col-md-3">
                <div class="our_blog_item">
                    <div class="our_blog_img">
                        <img src="/img/{{ $item['image'] }}" alt="">
                    </div>
                    <div class="our_blog_content">
                        <a href="#">
                            {{ $item['title'] }}
                        </a>

                    </div>
                </div>
            </div>
        @endforeach

      </div>
    </div>
  </section>
