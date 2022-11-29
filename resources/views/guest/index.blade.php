@extends('layouts.default')
 
@section('content')

<div class="container-fluid p-0">
  <div class=" bg-light" id="home">
    

    <div id="carouselExampleControls" class="carousel slide position-relative" style="z-index: 1" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php $i=0; ?>
        @foreach ($data as $value)
          <?php $i++; ?>
          <div class="carousel-item {{ $i==1 ? 'active' : ''; }}">
            <img src="{{ asset("storage/images")}}/{{ $value['image'] }}" class="d-block" alt="...">
          </div>        
        @endforeach
    
 
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  <div  class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-3">GIỚI THIỆU</h2>
        <p class="">Là một trong những công ty phân phối Nhạc cụ có mặt đầu tiên tại thị trường Việt Nam, HayDen Music (VTM) 
            luôn nỗ lực phát triển bền vững và cùng Việt Nam “Tiến tới tương lai”. Với nền tảng kiến thức âm nhạc, sự kết hợp làm việc 
            của toàn thể nhân viên dựa trên phương châm Quyền lợi của Khách hàng là quan trọng nhất, VTM đã, đang và sẽ không ngừng
             cung cấp cho đối tác và người tiêu dùng giá trị đích thực với những Sản phẩm và Dịch vụ có chất lượng cao đạt tiêu chuẩn 
             quốc tế với mức giá hợp lý nhất và dịch vụ sau bán hàng hoàn hảo. Chúng tôi tin tưởng sẽ luôn mang đến sự hài lòng cao nhất cho khách hàng, cũng như đóng góp tích cực cho sự phát triển của ngành Âm nhạc Việt Nam.
        </p>
        <p class="">
            Hayden Music cũng tự hào là đại diện nhập khẩu và phân phối độc quyền hơn 50 nhãn hàng nổi tiếng thế giới: Steinway & Sons, Boston, Essex, 
            Kawai, Kohler & Campbell, Roland, Casio, Taylor, Fender, Pearl,… Đồng thời, là đại diện độc quyền và duy nhất được phép tổ chức thi và cấp chứng
            chỉ quốc tế London College of Music (LCM) thuộc University of West London tại Việt Nam và là đơn vị giảng dạy âm nhạc mầm non theo chương trình
            Kawai và Music For Little Mozarts.
        </p>
      
    </div>
  </div>
  
  
  
  
  <!-- Gallery -->
  <div class="container-fluid">
     
  <div class="row bg-light">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="{{ asset("storage/images")}}/home1.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
  
      <img
        src="{{ asset("storage/images")}}/home2.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ asset("storage/images")}}/home3.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="{{ asset("storage/images")}}/home4.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="{{ asset("storage/images")}}/home5.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Waves at Sea"
      />
  
      <img
        src="{{ asset("storage/images")}}/home6.jpg"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Yosemite National Park"
      />
    </div>
  </div>
  </div>
 
</div>





<!-- Gallery -->

@endsection



