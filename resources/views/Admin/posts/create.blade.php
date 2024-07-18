@extends('Admin.partials.master')

@section('title')
    Thêm mới bài viết
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Thêm mới bài viết</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <label for="vertical-form-showcode" class="form-label text-muted">Show Code</label>
                                    <input class="form-check-input code-switcher" type="checkbox"
                                           id="vertical-form-showcode">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('posts.store') }}" id="formSubmit" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="mb-3">
                                        <label for="employeeName" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                               placeholder="Nhập tiêu đề">
                                    </div>
                                    <div class="mb-3">
                                        <label for="employeeName" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="employeeUrl" class="form-label">Hình ảnh</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="mb-3 w-25">
                                        <img src="" class="object-fit-cover" id="img" alt="" style="margin: 0 0 20px 0;">
                                    </div>
                                    <div class="mb-3">
                                        <label for="employeeUrl" class="form-label">Danh mục</label>
                                        <select class="form-select w-25" id="category_id" name="category_id">
                                            @foreach($dataDanhMuc as $category)
                                                <option
                                                    value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @if(count($category->childrenRecursive) > 0)
                                                    @include('Admin.components.child-category', ['children' => $category->childrenRecursive, 'depth' => 1])
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="StartleaveDate" class="form-label">Mô tả ngắn</label>
                                        <textarea class="form-control tinymce_editor_init" name="excerpt"
                                                  id="motaCkeditor"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="VertimeassageInput" class="form-label">Nội dung</label>
                                        <textarea class="form-control tinymce_editor_init" name="content"
                                                  id="contentCkeditor"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="text-start">
                                        <a href="{{ route('posts.list') }}" class="btn btn-danger">Quay lại</a>
                                        <button type="submit" class="btn btn-primary btnSubmit">Thêm mới</button>
                                    </div>
                                </form>
                            </div>
                            <div class="d-none code-view">
                                <pre class="language-markup" style="height: 375px;">
                                    <code>&lt;form action=&quot;&quot;&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;employeeName&quot; class=&quot;form-label&quot;&gt;Employee Name&lt;/label&gt;
                                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;employeeName&quot; placeholder=&quot;Enter emploree name&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;employeeUrl&quot; class=&quot;form-label&quot;&gt;Employee Department URL&lt;/label&gt;
                                            &lt;input type=&quot;url&quot; class=&quot;form-control&quot; id=&quot;employeeUrl&quot; placeholder=&quot;Enter emploree url&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;StartleaveDate&quot; class=&quot;form-label&quot;&gt;Start Leave Date&lt;/label&gt;
                                            &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;StartleaveDate&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;EndleaveDate&quot; class=&quot;form-label&quot;&gt;End Leave Date&lt;/label&gt;
                                            &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;EndleaveDate&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;mb-3&quot;&gt;
                                            &lt;label for=&quot;VertimeassageInput&quot; class=&quot;form-label&quot;&gt;Message&lt;/label&gt;
                                            &lt;textarea class=&quot;form-control&quot; id=&quot;VertimeassageInput&quot; rows=&quot;3&quot; placeholder=&quot;Enter your message&quot;&gt;&lt;/textarea&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;text-end&quot;&gt;
                                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Add Leave&lt;/button&gt;
                                        &lt;/div&gt;
                                    &lt;/form&gt;</code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

@section('js')
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            $('#formSubmit').on('submit', function (e) {
                e.preventDefault();

                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('title', $('#title').val());
                formData.append('slug', $('#slug').val());
                formData.append('category_id', $('#category_id').val());
                formData.append('excerpt', CKEDITOR.instances.motaCkeditor.getData());
                formData.append('content', CKEDITOR.instances.contentCkeditor.getData());

                if ($('#image')[0].files[0]) {
                    formData.append('image', $('#image')[0].files[0]);
                }

                $.ajax({
                    url: '{{ route("posts.store") }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response.store) {
                            Swal.fire({
                                position: "center",
                                icon: "success",
                                title: `${response.message}`,
                                showConfirmButton: false,
                                timer: 2500
                            });

                            $('#formSubmit').trigger('reset');

                            CKEDITOR.instances.motaCkeditor.setData('');
                            CKEDITOR.instances.contentCkeditor.setData('');

                            $('#img').attr('src', '');
                            $('#img').css('width', '0px');
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: `${xhr.responseJSON.message}`,
                            showConfirmButton: false,
                            timer: 2500
                        });
                    }
                });
            });



            $('#image').on('change', function () {
                let reader = new FileReader()
                reader.onload = (e) => {
                    $('#img').attr('src', e.target.result);
                    $('#img').css('width', '300px');
                    $('#img').css('height', '300px');
                }
                reader.readAsDataURL(this.files[0]);
            })

            $('#title').on('input', function () {
                let title = $('#title').val().trim().toLowerCase();

                const vnAccents = [
                    'à', 'á', 'ạ', 'ả', 'ã', 'â', 'ầ', 'ấ', 'ậ', 'ẩ', 'ẫ', 'ă', 'ằ', 'ắ', 'ặ', 'ẳ', 'ẵ',
                    'è', 'é', 'ẹ', 'ẻ', 'ẽ', 'ê', 'ề', 'ế', 'ệ', 'ể', 'ễ',
                    'ì', 'í', 'ị', 'ỉ', 'ĩ',
                    'ò', 'ó', 'ọ', 'ỏ', 'õ', 'ô', 'ồ', 'ố', 'ộ', 'ổ', 'ỗ', 'ơ', 'ờ', 'ớ', 'ợ', 'ở', 'ỡ',
                    'ù', 'ú', 'ụ', 'ủ', 'ũ', 'ư', 'ừ', 'ứ', 'ự', 'ử', 'ữ',
                    'ỳ', 'ý', 'ỵ', 'ỷ', 'ỹ',
                    'đ',
                    'À', 'Á', 'Ạ', 'Ả', 'Ã', 'Â', 'Ầ', 'Ấ', 'Ậ', 'Ẩ', 'Ẫ', 'Ă', 'Ằ', 'Ắ', 'Ặ', 'Ẳ', 'Ẵ',
                    'È', 'É', 'Ẹ', 'Ẻ', 'Ẽ', 'Ê', 'Ề', 'Ế', 'Ệ', 'Ể', 'Ễ',
                    'Ì', 'Í', 'Ị', 'Ỉ', 'Ĩ',
                    'Ò', 'Ó', 'Ọ', 'Ỏ', 'Õ', 'Ô', 'Ồ', 'Ố', 'Ộ', 'Ổ', 'Ỗ', 'Ơ', 'Ờ', 'Ớ', 'Ợ', 'Ở', 'Ỡ',
                    'Ù', 'Ú', 'Ụ', 'Ủ', 'Ũ', 'Ư', 'Ừ', 'Ứ', 'Ự', 'Ử', 'Ữ',
                    'Ỳ', 'Ý', 'Ỵ', 'Ỷ', 'Ỹ',
                    'Đ'
                ];

                const vnAccentsOut = [
                    'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a',
                    'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e',
                    'i', 'i', 'i', 'i', 'i',
                    'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o',
                    'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u',
                    'y', 'y', 'y', 'y', 'y',
                    'd',
                    'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A',
                    'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E',
                    'I', 'I', 'I', 'I', 'I',
                    'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O',
                    'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U',
                    'Y', 'Y', 'Y', 'Y', 'Y',
                    'D'
                ];

                for (let i = 0; i < vnAccents.length; i++) {
                    title = title.replace(new RegExp(vnAccents[i], 'g'), vnAccentsOut[i]);
                }

                title = title.replace(/[^\w\s-]/g, '');
                title = title.replace(/\s+/g, '-');

                $('#slug').val(title);
            });
        });
    </script>
@endsection
