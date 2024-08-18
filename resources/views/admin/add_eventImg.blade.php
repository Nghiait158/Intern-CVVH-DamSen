
@extends('admin.admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm hình ảnh sự kiện vào cơ sở dữ liệu  
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/saveEventImg')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="eImgID">ID Hình Ảnh(eImgID)</label>
                                <input type="text" class="form-control" name="eImgID"  id="eImgID"  >
                            </div>
                            <div class="form-group">
                                <label for="eImgName">Tên Hình Ảnh(eImgName) *Lưu ý: viết thường không dấu, không khoảng trắng</label>
                                <input type="text" class="form-control" name="eImgName"  id="eImgName"  >
                            </div>
                            <div class="form-group">
                                @csrf
                                <label for="eID">Sự Kiện(eID)</label>
                                <select class="form-control" name="eID">
                                    @foreach($all_event ?? [] as $event ) 
                                     <option value="{{ $event->eID }}">{{ $event->eName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                <label for="eImgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="eImgPath" id="eImgPath" required>
                            </div> --}}
                            <div class="form-group">
                                <label for="imageChoice">Chọn cách nhập hình ảnh:</label><br>
                                <input type="radio" id="fileOption" name="imageChoice" value="file" checked>
                                <label for="fileOption">Tải lên từ máy tính</label><br>
                                <input type="radio" id="textOption" name="imageChoice" value="text">
                                <label for="textOption">Nhập URL hình ảnh</label>
                            </div>
                            
                            <div class="form-group" id="fileInput">
                                <label for="eImgPath">Chọn Hình Ảnh</label>
                                <input type="file" class="form-control" name="eImgPath" id="eImgPath">
                            </div>
                            
                            <div class="form-group" id="textInput" style="display: none;">
                                <label for="eImgUrl">Nhập URL hình ảnh</label>
                                <input type="text" class="form-control" name="eImgUrl" id="eImgUrl">
                            </div>
                            


                        <button type="submit" name="add_eventImg" class="btn btn-info">Thêm hình ảnh</button>
                        </form>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            const fileOption = document.getElementById('fileOption');
                            const textOption = document.getElementById('textOption');
                            const fileInput = document.getElementById('fileInput');
                            const textInput = document.getElementById('textInput');

                            fileOption.addEventListener('change', function () {
                                fileInput.style.display = 'block';
                                textInput.style.display = 'none';
                            });

                            textOption.addEventListener('change', function () {
                                fileInput.style.display = 'none';
                                textInput.style.display = 'block';
                            });
                        });

                    </script>
                </div>
            </section>
</div>    
@endsection