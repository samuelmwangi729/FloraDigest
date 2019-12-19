<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
      <div class="collapse" id="collapseExample">
        <ul class="list-unstyled" style="color:white;padding-left:30px">
            <li><a href="{{ route('posts.create') }}" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Create</a></li>
            <li><a href="{{ route('posts.view') }}" ><i class="fa fa-eye"></i>&nbsp;&nbsp;View</a></li>
        </ul>
      </div>
</li>
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('posts.trashed') }}"><i class="fa fa-trash"></i><span>Recycle Bin</span></a>
</li>
@if(Auth::user()->admin)
<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>
<li class="{{ Request::is('tags*') ? 'active' : '' }}">
    <a href="{{ route('tags.index') }}"><i class="fa fa-edit"></i><span>Tags</span></a>
</li>
@endif