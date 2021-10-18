


    @include('pages.layout.header')
  <section class="page-layout">
            @include('pages.layout.side_menu')
         <div class="page-content">
            @include('pages.layout.navbar')
            @include('pages.layout.description')
            @include('pages.layout.clock')
            @include('pages.layout.countdown')
            <div class="table-container">
                @include('pages.layout.history')
                @include('pages.layout.tables')
            </div>
         </div>
  </section>

    @include('pages.layout.footer')



