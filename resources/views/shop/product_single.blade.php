@extends('layouts.app')

@section('content')

<div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-6">
          <div class="s_product_img">
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item">
                  <img
                    class="d-block w-100"
                    src="{{ asset($product->image2) }}"
                    alt="" width="100%" height="440px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3>{{ $product->productName }}</h3>
            <h2>${{ $product->newPrice }}</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : {{ App\Models\ProductsCategories::find($product->category_id)->name }}</a
                >
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : <?php if($product->status ){ echo 'In Stock';}else{ echo 'Out of Stock ';} ?></a>
              </li>
            </ul>
            <p>
              {{ $product->text }}
            </p>
            <div class="product_count">
                <form method="POST" action="{{ route('product.cart') }}">
                  {{ csrf_field() }}
              <label for="qty">Quantity:</label>
              <input
                type="text"
                name="qty"
                id="sst"
                maxlength="12"
                value="1"
                title="Quantity:"
                class="input-text qty"
              />
              <input type="hidden" value="{{ $product->slug }}" name="product">
              <input type="hidden" value="{{ $product->newPrice }}" name="price">
              <button
                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                class="increase items-count"
                type="button"
              >
                <i class="fa fa-angle-up"></i>
              </button>
              <button
                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                class="reduced items-count"
                type="button"
              >
                <i class="fa fa-angle-down"></i>
              </button>
            </div>
            <div class="card_area">
              <button type="submit" class="main_btn">Add to Cart</button>
              <a class="icon_btn" href="{{ route('wishlist.add',['slug'=>$product->slug]) }}" title="Add to Wishlist">
                <i class="fa fa-heart"></i>
              </a>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
  <div class="container" style="padding-top:20px">
    <div class="col-sm-4">
        <img src="{{ asset($product->image2) }}" width="100%" height="200px">
    </div>
    <div class="col-sm-4">
        <img src="{{ asset($product->image3) }}" width="100%" height="200px">
    </div>
    <div class="col-sm-4">
        <img src="{{ asset($product->image4) }}" width="100%" height="200px">
    </div>
  </div>

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link"
            id="home-tab"
            data-toggle="tab"
            href="#home"
            role="tab"
            aria-controls="home"
            aria-selected="true"
            >Description</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="profile-tab"
            data-toggle="tab"
            href="#profile"
            role="tab"
            aria-controls="profile"
            aria-selected="false"
            >Specification</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            id="contact-tab"
            data-toggle="tab"
            href="#contact"
            role="tab"
            aria-controls="contact"
            aria-selected="false"
            >Comments</a
          >
        </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            id="review-tab"
            data-toggle="tab"
            href="#review"
            role="tab"
            aria-controls="review"
            aria-selected="false"
            >Reviews</a
          >
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div
          class="tab-pane fade"
          id="home"
          role="tabpanel"
          aria-labelledby="home-tab"
        >
        <div class="text-left">
          <?php echo $product->Description;?>
        </div>
        </div>
        <div
          class="tab-pane fade"
          id="profile"
          role="tabpanel"
          aria-labelledby="profile-tab"
        >
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Width</h5>
                  </td>
                  <td>
                    <h5>{{ $product->width }}mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Height</h5>
                  </td>
                  <td>
                    <h5>{{ $product->height }}mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Depth</h5>
                  </td>
                  <td>
                    <h5>{{ $product->depth }}mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Weight</h5>
                  </td>
                  <td>
                    <h5>{{ $product->weight }}g</h5>
                  </td>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td>
                    <h5>expiry</h5>
                  </td>
                  <td>
                    <h5>{{ $product->expiry }}</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="contact"
          role="tabpanel"
          aria-labelledby="contact-tab"
        >
          <div class="row">
            <div class="col-lg-6">
              <div class="comment_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="img/product/single-product/review-1.png"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item reply">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="img/product/single-product/review-2.png"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="img/product/single-product/review-3.png"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <h5>12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Post a comment</h4>
                <form
                  class="row contact_form"
                  action="contact_process.php"
                  method="post"
                  id="contactForm"
                  novalidate="novalidate"
                >
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Your Full name"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="number"
                        name="number"
                        placeholder="Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        name="message"
                        id="message"
                        rows="1"
                        placeholder="Message"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button
                      type="submit"
                      value="submit"
                      class="btn submit_btn"
                    >
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade show active"
          id="review"
          role="tabpanel"
          aria-labelledby="review-tab"
        >
          <div class="row">
            <div class="col-lg-6">
              <div class="row total_rate">
                <div class="col-6">
                  <div class="box_total">
                    <h5>Overall</h5>
                    <h4>4.0</h4>
                    <h6>(03 Reviews)</h6>
                  </div>
                </div>
                <div class="col-6">
                  <div class="rating_list">
                    <h3>Based on 3 Reviews</h3>
                    <ul class="list">
                      <li>
                        <a href="#"
                          >5 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >4 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >3 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >2 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >1 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="review_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="img/product/single-product/review-1.png"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="img/product/single-product/review-2.png"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img
                        src="img/product/single-product/review-3.png"
                        alt=""
                      />
                    </div>
                    <div class="media-body">
                      <h4>Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>Add a Review</h4>
                <p>Your Rating:</p>
                <ul class="list">
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-star"></i>
                    </a>
                  </li>
                </ul>
                <p>Outstanding</p>
                <form
                  class="row contact_form"
                  action="contact_process.php"
                  method="post"
                  id="contactForm"
                  novalidate="novalidate"
                >
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Your Full name"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        placeholder="Email Address"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        id="number"
                        name="number"
                        placeholder="Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        class="form-control"
                        name="message"
                        id="message"
                        rows="1"
                        placeholder="Review"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button
                      type="submit"
                      value="submit"
                      class="btn submit_btn"
                    >
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->
  <div class="row">
    <div id="app">
            <footer-component></footer-component>
    </div>
  </div>

@endsection