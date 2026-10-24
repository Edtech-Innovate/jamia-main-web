
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Update Course</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
@php
$programs=DB::select("select * from programs order by id asc");
@endphp
<form action="/update_course/{{$Course->id}}" method="post" id="add_data" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Program Name</label>
                        <select name="program_id" class="form-control">
                            <option value="">Choose</option>
                            @foreach ($programs as $program)
                            <option value="{{$program->id}}" {{ $program->id==$Course->program_id ? 'selected' : '' }}> {{$program->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Course Name</label>
                        <input type="text" class="form-control" value="{{$Course->name}}" placeholder="Course Name" name="name" required>
                    </div>
                </div>
                <div class="col-md-6 col-6" style="float: left">
                    <div class="form-group mb-3">
                        <label class="form-label">fee</label>
                        <input type="text" class="form-control" placeholder="Course Name" value="{{$Course->fee}}" name="fee" required>
                    </div>
                </div>
                <div class="col-md-6 col-6" style="float: left">
                    <div class="form-group mb-3">
                        <label class="form-label">duration</label>
                        <input type="text" class="form-control" placeholder="Course Name" name="duration" value="{{$Course->duration}}" required>
                    </div>
                </div>
                <div class="col-md-6 col-6" style="float: left">
                    <div class="form-group mb-3">
                        <label class="form-label">eligibilty criteria</label>
                        <input type="text" class="form-control" placeholder="Eligibilty Criteria" name="eligibility_criteria" value="{{$Course->eligibility_criteria}}" required>
                    </div>
                </div>
                <div class="col-md-6 col-6" style="float: left">
                    <div class="form-group mb-3">
                        <label class="form-label">average salary</label>
                        <input type="text" class="form-control" placeholder="Average Salary" name="average_salary" value="{{$Course->average_salary}}" required>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="">{{$Course->description}}</textarea>
                    </div>
                </div>

                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" value="{{$Course->image}}" name="image">
                        <span><img src="/{{$Course->image}}" style="width:100px;"></span>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" placeholder="">{{$Course->content}}</textarea>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/super-build/ckeditor.js"></script>

<script>
   
    CKEDITOR.ClassicEditor.create(document.getElementById("content"), {
        toolbar: {
            items: [
                'exportPDF', 'exportWord', '|',
                'findAndReplace', 'selectAll', '|',
                'heading', '|',
                'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                'bulletedList', 'numberedList', 'todoList', '|',
                'outdent', 'indent', '|',
                'undo', 'redo',
                '-',
                'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                'alignment', '|',
                'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                'textPartLanguage', '|',
                'sourceEditing'
            ],
            shouldNotGroupWhenFull: true
        },
        
        list: {
            properties: {
                styles: true,
                startIndex: true,
                reversed: true
            }
        },
        heading: {
            options: [{
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                },
                {
                    model: 'heading1',
                    view: 'h1',
                    title: 'Heading 1',
                    class: 'ck-heading_heading1'
                },
                {
                    model: 'heading2',
                    view: 'h2',
                    title: 'Heading 2',
                    class: 'ck-heading_heading2'
                },
                {
                    model: 'heading3',
                    view: 'h3',
                    title: 'Heading 3',
                    class: 'ck-heading_heading3'
                },
                {
                    model: 'heading4',
                    view: 'h4',
                    title: 'Heading 4',
                    class: 'ck-heading_heading4'
                },
                {
                    model: 'heading5',
                    view: 'h5',
                    title: 'Heading 5',
                    class: 'ck-heading_heading5'
                },
                {
                    model: 'heading6',
                    view: 'h6',
                    title: 'Heading 6',
                    class: 'ck-heading_heading6'
                }
            ]
        },
        placeholder: 'Welcome to CKEditor 5!',
        fontFamily: {
            options: [
                'default',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif'
            ],
            supportAllValues: true
        },
        fontSize: {
            options: [10, 12, 14, 'default', 18, 20, 22],
            supportAllValues: true
        },
        htmlSupport: {
            allow: [{
                name: /.*/,
                attributes: true,
                classes: true,
                styles: true
            }]
        },
        htmlEmbed: {
            showPreviews: true
        },
        link: {
            decorators: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        mention: {
            feeds: [{
                marker: '@',
                feed: [
                    '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                    '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                    '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                    '@sugar', '@sweet', '@topping', '@wafer'
                ],
                minimumCharacters: 1
            }]
        },
        removePlugins: [
            'CKBox',
            'CKFinder',
            'EasyImage',
            'RealTimeCollaborativeComments',
            'RealTimeCollaborativeTrackChanges',
            'RealTimeCollaborativeRevisionHistory',
            'PresenceList',
            'Comments',
            'TrackChanges',
            'TrackChangesData',
            'RevisionHistory',
            'Pagination',
            'WProofreader',
            'MathType',
            'SlashCommand',
            'Template',
            'DocumentOutline',
            'FormatPainter',
            'TableOfContents'
        ]
    });
</script>

<script>
    $(function() {
        $("#add_data").on("submit", function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: this.action,
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data.status == '200') {
                        $('.modal').modal('hide');
                        toastr.success(data.msg);
                        setTimeout(() => {
                            window.location.reload();
                        }, 2000);
                    } else {
                        toastr.error(data.errors);
                    }
                }
            });
        });
    });
</script>
