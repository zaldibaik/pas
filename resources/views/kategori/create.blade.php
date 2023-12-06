@extends('layouts.app')

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">


@section('content')

<h1>Create News</h1>


<form ection="/home" method="POST">
    @csrf
    <!-- <div class="mb-3">
        <label class="form-label">Judul berita</label>
        <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">descripsi</label>
        <textarea name="decripsi" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    @error('decripsi')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror -->

    <div class="card mx-4 my-3 shadow">
        <div class="card-header h4">
            <span><i class="fas fa-plus"></i></span> Tambahkan berita
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-lg-9 pe-lg-5">
                        <div class="mb-3">
                            <label for="newsTitle" class="form-label">Judul berita</label>
                            <input type="text" name="nama" class="form-control" id="newsTitle autofocus">
                            @error('name')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row mb-3">
                        </div>
                        <!-- <div class="mb-3">
                        <label class="form-label">descripsi</label>
                        <textarea name="decripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div> -->
                        <div class="mb-3">
                            <label for="decripsi" class="form-label">Description</label>
                            <div id="decripsi" style="height:350px;"></div>
                            <textarea class="form-control" name="decripsi" id="content-textarea" hidden style="display: none; cols="30" rows="10"></textarea>
                            @error('decripsi')
                                <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <div class="card shadow-none border text-center p-3">
                                <label class="form-label border-dashed p-3 cursor-pointer" id="label"
                                    style="border-radius:10px;" for="imageFile">Upload imh
                                    <img class="img-preview img-fluid mb-2">
                                    <img src="{{ asset('img/imageplus.png') }}" id="plusimg" class="img-fluid p-md-3"
                                        alt="">
                                    <input accept="image/*" type="file" name="cover" class="form-control mt-3"
                                        id="imageFile" onchange="previewImage()">
                                </label>
                                @error('cover')
                                    <p class='text-danger mb-0 text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{-- route('book.book') --}}" class="btn btn-secondary ">Cancel</a>
                <button type="submit" class="btn btn-dark">Add</button>
            </form>
        </div>
    </div>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        function previewImage() {
            const imageFile = document.querySelector('#imageFile');
            const imgPreview = document.querySelector('.img-preview');
            const label = document.querySelector('#label');
            const img = document.querySelector('#plusimg');

            img.style.display = 'none';
            label.style.border = 0;
            imgPreview.style.display = 'block';

            const blob = URL.createObjectURL(imageFile.files[0]);
            imgPreview.src = blob;
        }
        var toolbarOptions = [
            [{
                'font': []
            }],
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['blockquote', 'code-block'],

            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'indent': '-1'
            }, {
                'indent': '+1'
            }],

            [{
                'color': []
            }, {
                'background': []
            }],
            [{
                'align': []
            }],

            ['clean']
        ];
        var quill = new Quill('#decripsi', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        quill.on('text-change', function(delta, source) {
            updateHtmlOutput()
        })

        // When the convert button is clicked, update output
        $('#btn-convert').on('click', () => {
            updateHtmlOutput()
        })

        // Return the HTML content of the editor
        function getQuillHtml() {
            return quill.root.innerHTML;
        }

        // Highlight code output
        function updateHighlight() {
            hljs.highlightBlock(document.querySelector('#content-textarea'))
        }


        function updateHtmlOutput() {
            let html = getQuillHtml();
            console.log(html);
            document.getElementById('content-textarea').innerText = html;
            updateHighlight();
        }


        updateHtmlOutput()


    </script>
@endsection