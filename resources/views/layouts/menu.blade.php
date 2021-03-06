<li>
    <a href="/home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>
@if(Auth::user()->level=='Administrator' )
<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
      <div class="collapse" id="collapseExample">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li><a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Posts Categories</span></a></li>
            <li> <a href="{{ route('tags.index') }}"><i class="fa fa-edit"></i><span>Posts Tags</span></a></li>
            <li><a href="{{ route('posts.create') }}" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Create</a></li>
            <li><a href="{{ route('posts.view') }}" ><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a></li>
            <li><a href="{{ route('posts.trashed') }}"><i class="fa fa-trash"></i><span>Recycle Bin</span></a></li>
        </ul>
      </div>
</li>
<li class="{{ Request::is('news*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseNews" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-bell"></i><span>News</span></a>
      <div class="collapse" id="collapseNews">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li><a href="{{ route('newsTags.index') }}"><i class="fa fa-edit"></i><span>News Tags</span></a></li>
            <li><a href="{{ route('newsTags.restore') }}"><i class="fa fa-trash"></i><span>Trashed NewsTags</span></a></li>
            <li><a href="{{ route('news.index') }}"><i class="fa fa-bell"></i><span>News</span></a></li>
            <li> <a href="{{ route('news.deleted') }}"><i class="fa fa-trash"></i><span>Deleted News</span></a></li>
        </ul>
      </div>
    </li>
<li class="{{ Request::is('politics*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapsePolitics" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-users"></i><span>Politics</span></a>
      <div class="collapse" id="collapsePolitics">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li><a href="{{ route('politicsTags.index') }}"><i class="fa fa-plus"></i><span>Politics Tags</span></a></li>
            <li> <a href="{{ route('politics.trashed.tags') }}"><i class="fa fa-trash"></i><span>Deteled Politics Tags</span></a></li>
            <li> <a href="{{ route('politics.index') }}"><i class="fa fa-users"></i><span>Politics</span></a></li>
            <li><a href="{{ route('political.news.trashed') }}"><i class="fa fa-trash"></i><span>Trashed Political News</span></a></li>
        </ul>
      </div>
</li>
<li class="{{ Request::is('opinions*') ? 'active' : '' }}">
    <a href="{{ route('opinions.index') }}"><i class="fa fa-edit"></i><span>Opinions</span></a>
</li>

<li class="{{ Request::is('optionsTopics*') ? 'active' : '' }}">
    <a href="{{ route('optionsTopics.index') }}"><i class="fa fa-edit"></i><span>Options Topics</span></a>
</li>

<li class="{{ Request::is('others*') ? 'active' : '' }}">
    <a href="{{ route('others.index') }}"><i class="fa fa-edit"></i><span>Others</span></a>
</li>
<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseProducts" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Products</span></a>
      <div class="collapse" id="collapseProducts">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li class="{{ Request::is('subcategories*') ? 'active' : '' }}">
                <a href="{{ route('productsCategories.index') }}"><i class="fa fa-angle-up"></i><span>Products Categories</span></a>
            </li>
            <li class="{{ Request::is('subcategories*') ? 'active' : '' }}">
                <a href="{{ route('subcategories.index') }}"><i class="fa fa-angle-down"></i><span>Subcategories</span></a>
            </li>
            <li> <a href="{{ route('tags.index') }}"><i class="fa fa-tags"></i><span>Posts Tags</span></a></li>
            <li class="{{ Request::is('brands*') ? 'active' : '' }}">
                <a href="{{ route('brands.index') }}"><i class="fa fa-tag"></i><span>Brands</span></a>
            </li>
            
            <li class="{{ Request::is('colors*') ? 'active' : '' }}">
                <a href="{{ route('colors.index') }}"><i class="fa fa-check"></i><span>Colors</span></a>
            </li>
            
            <li class="{{ Request::is('labels*') ? 'active' : '' }}">
                <a href="{{ route('labels.index') }}"><i class="fa fa-tags"></i><span>Labels</span></a>
            </li>
            <li class="{{ Request::is('counties*') ? 'active' : '' }}">
                <a href="{{ route('counties.index') }}"><i class="fa fa-edit"></i><span>Counties</span></a>
            </li>
            
            <li class="{{ Request::is('towns*') ? 'active' : '' }}">
                <a href="{{ route('towns.index') }}"><i class="fa fa-edit"></i><span>Towns</span></a>
            </li>
            
            <li class="{{ Request::is('shippings*') ? 'active' : '' }}">
                <a href="{{ route('shippings.index') }}"><i class="fa fa-edit"></i><span>Shippings</span></a>
            </li>
            
            <li class="{{ Request::is('payments*') ? 'active' : '' }}">
                <a href="{{ route('payments.index') }}"><i class="fa fa-edit"></i><span>Payments</span></a>
            </li>
            <li class="{{ Request::is('products*') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}"><i class="fa fa-shopping-cart"></i><span>&nbsp;Products</span></a>
            </li>
        </ul>
      </div>
</li>
<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#Assignments" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Assignments</span></a>
      <div class="collapse" id="Assignments">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li>
                <a href="{{ route('assignment.add') }}"><i class="fa fa-plus"></i><span>&nbsp;&nbsp;New Assignment</span></a>
            </li>
            <li>
                <a href="{{ route('assignment.view') }}"><i class="fa fa-eye"></i><span>&nbsp;&nbsp;View Assignments</span></a>
            </li>
            <li>
                <a href="{{ route('assignment.trashed') }}"><i class="fa fa-trash"></i><span>&nbsp;&nbsp;Deleted Assignment</span></a>
            </li>
        </ul>
      </div>
</li>
<li class="{{ Request::is('availables*') ? 'active' : '' }}">
    <a href="{{ route('availables.index') }}"><i class="fa fa-gift"></i><span>Available Proposals</span></a>
</li>

<li class="{{ Request::is('topics*') ? 'active' : '' }}">
    <a href="{{ route('topics.index') }}"><i class="fa fa-graduation-cap"></i><span>Research Topics</span></a>
</li>

@endif
@if(Auth::user()->level=='User')
<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseProducts" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Assignments</span></a>
      <div class="collapse" id="collapseProducts">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li>
                <a href="{{ route('assignment.add') }}"><i class="fa fa-plus"></i><span>&nbsp;&nbsp;New Assignment</span></a>
            </li>
            <li>
                <a href="{{ route('assignment.view') }}"><i class="fa fa-eye"></i><span>&nbsp;&nbsp;View Assignments</span></a>
            </li>
            <li>
                <a href="{{ route('assignments.complete') }}"><i class="fa fa-eye"></i><span>&nbsp;&nbsp;Post Complete Assignments</span></a>
            </li>
            <li>
                <a href="{{ route('assignment.trashed') }}"><i class="fa fa-trash"></i><span>&nbsp;&nbsp;Deleted Assignment</span></a>
            </li>
        </ul>
      </div>
</li>
<li>
    <a href="#"><i class="fa fa-cog"></i>Account Settings</a>
</li>
@endif
@if(Auth::user()->level=='Blogger')
<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
      <div class="collapse" id="collapseExample">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
           @if(Auth::user()->level == 'Administrator')
           <li><a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Posts Categories</span></a></li>
           <li> <a href="{{ route('tags.index') }}"><i class="fa fa-edit"></i><span>Posts Tags</span></a></li>
           @endif
            <li><a href="{{ route('posts.create') }}" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Create</a></li>
            <li><a href="{{ route('posts.view') }}" ><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a></li>
            <li><a href="{{ route('posts.trashed') }}"><i class="fa fa-trash"></i><span>Recycle Bin</span></a></li>
        </ul>
      </div>
</li>
<li>
    <a href="#"><i class="fa fa-cog"></i>Account Settings</a>
</li>
@endif
@if(Auth::user()->level=='Buyer')
<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Orders</span></a>
      <div class="collapse" id="collapseExample">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li><a href="{{route('cart.index')}}" ><i class="fa fa-plus"></i>&nbsp;&nbsp;New Orders</a></li>
        </ul>
      </div>
</li>
<li>
<li><a type="button" href="{{ route('order.track') }}" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-truck"></i>&nbsp;Track Order
</a>
  
    <a href="#"><i class="fa fa-cog"></i>Account Settings</a>
</li>
@endif