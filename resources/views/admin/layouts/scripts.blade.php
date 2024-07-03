<script src='{{ asset(' admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}'></script>
<script src="{{ asset('admin/assets/libs/%40popperjs/core/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/tippy.js/tippy-bundle.umd.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/prismjs/prism.js') }}"></script>
<script src="{{ asset('admin/assets/libs/lucide/umd/lucide.js') }}"></script>
<script src="{{ asset('admin/assets/js/tailwick.bundle.js') }}"></script>
<!--dashboard ecommerce init js-->
<script src="{{ asset('admin/assets/js/pages/dashboards-ecommerce.init.js') }}"></script>
<!-- App js -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
<!-- dropzone -->
<script src="{{ asset('admin/assets/libs/dropzone/dropzone-min.js') }}"></script>
<!--product create init js-->
<script src="{{ asset('admin/assets/js/pages/apps-ecommerce-product-create.init.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/snbf9o6d9u6prfte7m00bn7zau1eq2rbrebh4kcdtav8y2ea/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector: 'textarea#desc', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
skin: "oxide-dark",
content_css: "dark",
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>