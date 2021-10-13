<h3>شاشة الأطباء  </h3>
<hr>
@if ($errors->any())
     <div class="">
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
             @endforeach
           </ul>
    </div>
@endif

@include('pages.backend.h_doctors.create')