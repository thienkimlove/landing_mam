<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

<li><a href='{{ backpack_url('category') }}'><i class='fa fa-money'></i> <span>Categories</span></a></li>
<li><a href='{{ backpack_url('post') }}'><i class='fa fa-edit'></i> <span>Posts</span></a></li>
<li><a href='{{ backpack_url('tag') }}'><i class='fa fa-tag'></i> <span>Tags</span></a></li>
<li><a href='{{ backpack_url('video') }}'><i class='fa fa-file-video-o'></i> <span>Videos</span></a></li>

<li><a href='{{ backpack_url('contact') }}'><i class='fa fa-copyright'></i> <span>Contacts</span></a></li>

<!-- Users, Roles Permissions -->
<li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>