

<section class="pricing-card-area fix section-padding30">
    <div  id="services-section" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="section-tittle text-center mb-90">
                    <h2>We offer best services to our customer</h2>
                </div>
            </div>
        </div>
        <div class="row">


            @foreach ($product as $products)
                

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <img src="product/{{$products->image}}" alt="" style="max-width: 100%; height: auto;>
                        <h4>{{$products->name}}</h4>
                        <p>Starting at</p>
                    </div>
                    <div class="card-mid">
                        <h4 style="color:red"> <del> Kshs{{$products->price}} </del> </h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <li style="color: blue"><i>Discounted price: Kshs{{$products->discount_price}}</i></li>
                            <li>{{$products->name}}</li>
                            
                        </ul>
                        

                            <form action="{{url('booking_cart', $products->id)}}" method="POST">

                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" name="quantity" value="1" min="1" style="width: 50px">
                                    </div>

                                    <div class="borders-btn">

                                    <input type="submit" value="Book Now">

                                    </div>
                                </div>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
          @endforeach

          <span style="padding-top: 20px;">

             {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
           
            </span>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                        anchor.addEventListener('click', function (e) {
                            e.preventDefault();
            
                            document.querySelector(this.getAttribute('href')).scrollIntoView({
                                behavior: 'smooth'
                            });
                        });
                    });
                });
            </script>
            
           
</section>