@extends('Admin.partials.master')

@section('title')
    Chi tiết bài viết
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Chi tiết bài viết</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="tables-without-border-showcode" class="form-label text-muted">Show
                                    Code</label>
                                <input class="form-check-input code-switcher" type="checkbox"
                                       id="tables-without-border-showcode">
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="mb-5 mt-3">
                                <h3>Bài viết: {{ $postById['title'] }}</h3>
                            </div>

                            <div class="table-responsive">

                                <div class="col-sm-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td style="width: 200px">ID</td>
                                            <td>{{ $postById['id'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Hình Ảnh</td>
                                            <td><img src="{{ $postById['image'] }}" style="width: 140px" alt=""></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Tiêu Đề</td>
                                            <td>{{ $postById['title'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Mô Tả Ngắn</td>
                                            <td>{!! $postById['excerpt'] !!}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Nội Dung</td>
                                            <td>{!! $postById['content'] !!}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Danh Mục</td>
                                            <td>{{ $postById['category_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 200px">Ngày Đăng</td>
                                            <td>{{ date("d-m-Y H:i:s", strtotime($postById['created_at'])) }}</td>
                                        </tr>
                                    </table>
                                    <a href="{{ route('posts.list') }}" class="btn btn-danger">Quay lại</a>
                                    <a href="{{ route('posts.edit', $postById->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none code-view">
                            <pre class="language-markup" style="height: 275px;"><code>&lt;!-- Tables Without Borders --&gt;
                                &lt;table class=&quot;table table-borderless table-nowrap&quot;&gt;
                                    &lt;thead&gt;
                                        &lt;tr&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Id&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Job Title&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Date&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                                            &lt;th scope=&quot;col&quot;&gt;&lt;/th&gt;
                                        &lt;/tr&gt;
                                    &lt;/thead&gt;
                                    &lt;tbody&gt;
                                        &lt;tr&gt;
                                            &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
                                            &lt;td&gt;Annette Black&lt;/td&gt;
                                            &lt;td&gt;Industrial Designer&lt;/td&gt;
                                            &lt;td&gt;10, Nov 2021&lt;/td&gt;
                                            &lt;td&gt;&lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Active&lt;/span&gt;&lt;/td&gt;
                                            &lt;td&gt;
                                                &lt;div class=&quot;hstack gap-3 fs-15&quot;&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-primary&quot;&gt;&lt;i class=&quot;ri-settings-4-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-danger&quot;&gt;&lt;i class=&quot;ri-delete-bin-5-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                        &lt;tr&gt;
                                            &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
                                            &lt;td&gt;Bessie Cooper&lt;/td&gt;
                                            &lt;td&gt;Graphic Designer&lt;/td&gt;
                                            &lt;td&gt;13, Nov 2021&lt;/td&gt;
                                            &lt;td&gt;&lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Active&lt;/span&gt;&lt;/td&gt;
                                            &lt;td&gt;
                                                &lt;div class=&quot;hstack gap-3 fs-15&quot;&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-primary&quot;&gt;&lt;i class=&quot;ri-settings-4-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-danger&quot;&gt;&lt;i class=&quot;ri-delete-bin-5-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                        &lt;tr&gt;
                                            &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
                                            &lt;td&gt;Leslie Alexander&lt;/td&gt;
                                            &lt;td&gt;Product Manager&lt;/td&gt;
                                            &lt;td&gt;17, Nov 2021&lt;/td&gt;
                                            &lt;td&gt;&lt;span class=&quot;badge bg-success-subtle text-success&quot;&gt;Active&lt;/span&gt;&lt;/td&gt;
                                            &lt;td&gt;
                                                &lt;div class=&quot;hstack gap-3 fs-15&quot;&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-primary&quot;&gt;&lt;i class=&quot;ri-settings-4-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-danger&quot;&gt;&lt;i class=&quot;ri-delete-bin-5-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                        &lt;tr&gt;
                                            &lt;th scope=&quot;row&quot;&gt;4&lt;/th&gt;
                                            &lt;td&gt;Lenora Sandoval&lt;/td&gt;
                                            &lt;td&gt;Applications Engineer&lt;/td&gt;
                                            &lt;td&gt;25, Nov 2021&lt;/td&gt;
                                            &lt;td&gt;&lt;span class=&quot;badge bg-danger-subtle text-danger&quot;&gt;Disabled&lt;/span&gt;&lt;/td&gt;
                                            &lt;td&gt;
                                                &lt;div class=&quot;hstack gap-3 fs-15&quot;&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-primary&quot;&gt;&lt;i class=&quot;ri-settings-4-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; class=&quot;link-danger&quot;&gt;&lt;i class=&quot;ri-delete-bin-5-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/td&gt;
                                        &lt;/tr&gt;
                                    &lt;/tbody&gt;
                                &lt;/table&gt;</code>
                            </pre>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
