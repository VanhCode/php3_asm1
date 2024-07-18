@extends('Admin.partials.master')

@section('title')
    Danh sách bài viết
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Danh sách bài viết</h4>
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
                        <div class="mb-3 mt-1">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary">Thêm mới bài viết</a>
                        </div>
                        <div class="live-preview">
                            <div class="table-responsive">
                                <table class="table table-borderless align-middle table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Lượt xem</th>
                                        <th scope="col">Ngày đăng</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dataList as $key => $post)
                                        <tr data-id-tr="{{ $post->id }}">
                                            <td class="fw-medium">{{ $key + 1 }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>
                                                <img src="{{ $post->image }}" alt="{{ $post->title }}"
                                                     class="object-fit-cover" width="150px" height="150px"/>
                                            </td>
                                            <td>{{ $post->category_name }}</td>
                                            <td>{{ $post->view }}</td>
                                            <td>{{ date('d-m-Y H:i:s', strtotime($post->created_at)) }}</td>
                                            <td>
                                                <div class="hstack gap-3 fs-15">
                                                    <a style="margin: 0 5px; cursor: pointer;"
                                                       href="{{ route('posts.detail', $post->id) }}"
                                                       class="link-primary"><i class="ri-eye-line"
                                                                               style="color: springgreen;font-size:18px;"></i></a>
                                                    <a style="margin: 0 5px; cursor: pointer;"
                                                       href="{{ route('posts.edit', $post->id) }}"
                                                       class="link-primary"><i class="ri-settings-4-line"
                                                                               style="font-size:18px;"></i></a>
                                                    <a style="margin: 0 5px; cursor: pointer;" class="link-danger"><i
                                                            class="ri-delete-bin-5-line" style="font-size:18px;"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#topmodal{{ $post->id }}"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <div id="topmodal{{ $post->id }}" class="modal fade" tabindex="-1"
                                             aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center p-5">
                                                        <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"
                                                                   trigger="loop"
                                                                   colors="primary:#f7b84b,secondary:#405189"
                                                                   style="width:130px;height:130px"></lord-icon>
                                                        <div class="mt-4">
                                                            <h4 class="mb-3">Bạn muốn xóa bài viết
                                                                '{{ $post->title }}' ?</h4>
                                                            <p class="text-muted mb-4"> Nó sẽ bị xóa vĩnh viễn khỏi
                                                                website của bạn</p>
                                                            <div class="hstack gap-2 justify-content-center">
                                                                <a href="javascript:void(0);"
                                                                   class="btn btn-link link-success fw-medium btnClose{{ $post->id }}"
                                                                   data-bs-dismiss="modal"><i
                                                                        class="ri-close-line me-1 align-middle"></i>
                                                                    Hủy</a>
                                                                <a data-post-id="{{ $post->id }}"
                                                                   class="btn btn-success btnDel">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    @endforeach

                                    </tbody>
                                </table>
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


@section('js')
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let btnDels = document.querySelectorAll('.btnDel');
            let formData = new FormData();

            btnDels.forEach(btnDel => {
                btnDel.addEventListener('click', function () {
                    let postId = this.dataset.postId;
                    formData.append('_token', '{{ csrf_token() }}');

                    let urlDelete = `/admin/posts/delete/${postId}`;

                    $.ajax({
                        url: urlDelete,
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (response.delete) {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: `${response.message}`,
                                    showConfirmButton: false,
                                    timer: 2500
                                });

                                let trElement = document.querySelector(
                                    `tr[data-id-tr="${postId}"]`);
                                let btnClose = document.querySelector(
                                    `.btnClose${postId}`);

                                btnClose.click();
                                trElement.remove();
                            }
                        },
                        error: function (xhr, status, error) {
                            Swal.fire({
                                position: "center",
                                icon: "error",
                                title: `${xhr.responseJSON.message}`,
                                showConfirmButton: false,
                                timer: 2500
                            });

                            let btnClose = document.querySelector(
                                `.btnClose${postId}`);

                            btnClose.click();
                        }
                    });
                });
            });
        });
    </script>
@endsection
