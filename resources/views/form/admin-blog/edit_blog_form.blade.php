
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalCenterTitle">Update Course</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
@php
$programs=DB::select("select * from blogs order by id asc");
@endphp
<form action="/update_blog/{{$blogs->id}}" method="post" id="add_data" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="row">
                       <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Slug (URL)</label>
                        <div class="input-group">
                            <span class="input-group-text">/blog/</span>
                            <input type="text" class="form-control" placeholder="enter-blog-slug" id="slug" name="slug"  value="{{$blogs->slug}}">
                        </div>
                        <small class="text-muted">Leave empty to auto-generate from title. Use lowercase letters, numbers, and hyphens only.</small>
                        <div id="slug-status" class="mt-1"></div>
                    </div>
                </div>
            <div class="col-md-12 col-12">
                <label class="form-label">Meta Title</label>
                <input type="text" class="form-control" placeholder="Meta Title" id="meta_title" name="meta_title" value="{{$blogs->meta_title}}">
                <small class="text-muted">Optional - SEO meta title</small>
            </div>
            <div class="form-group mb-3">
</div>
<div class="col-md-12 col-12">
    <div class="form-group mb-3">
        <label class="form-label">Meta Description</label>
        <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Meta Description" rows="2">{{$blogs->meta_description}}</textarea>
        <small class="text-muted">Optional - SEO meta description (recommended: 150-160 characters)</small>
    </div>
</div>
<div class="col-md-12 col-12">
    <div class="form-group mb-3">
        <label class="form-label">Meta Keywords</label>
        <input type="text" class="form-control" placeholder="keyword1, keyword2, keyword3" id="meta_key" name="meta_key" value="{{$blogs->meta_key}}">
        <small class="text-muted">Optional - Comma separated keywords for SEO</small>
    </div>
</div>
                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{$blogs->name}}" placeholder="" name="name" required>
                    </div>
                </div>
                
                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Short Description</label>
                        <textarea class="form-control" id="short_description"  name="short_description" placeholder="">{{$blogs->short_description}}</textarea>
                    </div>
                </div>

                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" value="{{$blogs->image}}" name="image">
                        <span><img src="/{{$blogs->image}}" style="width:100px;"></span>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="form-group mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" placeholder="">{{$blogs->content}}</textarea>
                        
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
