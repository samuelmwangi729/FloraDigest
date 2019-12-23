<li>
    <a href="/home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>
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

<li class="{{ Request::is('productsCategories*') ? 'active' : '' }}">
    <a href="{{ route('productsCategories.index') }}"><i class="fa fa-edit"></i><span>Products Categories</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('subcategories*') ? 'active' : '' }}">
    <a href="{{ route('subcategories.index') }}"><i class="fa fa-edit"></i><span>Subcategories</span></a>
</li>

