@extends('flayout.master')
@section('noidung')

<section id="page-header" class="about-header">

    <h2>Liên hệ</h2>
    <p>Hãy liên hệ với chúng tôi - Rất vui nhận được phản hồi từ các bạn</p>
  </section>

  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>Liên hệ</span>
      <h2>Địa chỉ</h2>
      <ul>
        <li>
          <i class="fa fa-map"></i>
          <p>123 Hoàng Liệt, Hoàng Mai , Hà Nội</p>
        </li>
        <li>
          <i class="fa fa-envelope"></i>
          <p>123 Hoàng Liệt, Hoàng Mai , Hà Nội</p>
        </li>
        <li>
          <i class="fa fa-phone-alt"></i>
          <p>123 Hoàng Liệt, Hoàng Mai , Hà Nội</p>
        </li>
        <li>
          <i class="fa fa-clock"></i>
          <p>123 Hoàng Liệt, Hoàng Mai , Hà Nội</p>
        </li>
      </ul>
    </div>

    <div class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3853.0962437382304!2d108.7714194726503!3d15.042791985497663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169ab1162f58b19%3A0x31fbd9fd0f94a0f4!2zVsO1IER1eSBOaW5oLCBDaOG7oyBDaMO5YSwgTmdoxKlhIEjDoG5oLCBRdeG6o25nIE5nw6NpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1715958908908!5m2!1svi!2s"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </section>
  <!---- newletter section start -->

  <!-- form contact -->
  <section id="form-contact">
    <form action="">
      <span>Gửi tin nhắn đến chúng tôi</span>
      <h2>Rất vui khi nhận phản hồi từ bạn</h2>
      <input type="text" placeholder="Tên của bạn" />
      <input type="text" placeholder="Email" />
      <input type="text" placeholder="Tiêu đề" />
      <textarea placeholder="Nội dung gởi" cols="30" rows="10"></textarea>
      <button>Gởi phản hồi</button>
    </form>

    <div class="people">
      <div>
        <img src="img/icon.webp" alt="" />
        <p>
          <span>Minh Quang</span> 
          <br />
          Phone: 0123456789
          <br />
          Email: mquangdz@gmail.com
        </p>
      </div>
      <div>
        <img src="img/icon.webp" alt="" />
        <p>
          <span>Minh Quang</span> 
          <br />
          Phone: 0123456789
          <br />
          Email: mquangdz@gmail.com
        </p>
      </div>
      <div>
        <img src="img/icon.webp" alt="" />
        <p>
          <span>Minh Quang</span> 
          <br />
          Phone: 0123456789
          <br />
          Email: mquangdz@gmail.com
        </p>
      </div>

    
  </section>
    @endsection
