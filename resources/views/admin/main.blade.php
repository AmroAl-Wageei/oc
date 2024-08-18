

{{-- First Start --}}
@include('include.first')
{{-- First End --}}

    <!-- Page Wrapper -->
    <div id="wrapper">

    {{-- First Start --}}
    @include('include.side')
    {{-- First End --}}

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            {{-- First Start --}}
            @include('include.nav')
            {{-- First End --}}

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    {{-- First Start --}}
                    @include('include.head')
                    {{-- First End --}}

                    {{-- **************************************************** --}}
                    
                        {{-- Content Start --}}
                        @yield('content')
                        {{-- Content End --}}

                    {{-- **************************************************** --}}


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        {{-- First Start --}}
        @include('include.footer')
        {{-- First End --}}


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


    {{-- Last Start --}}
    @include('include.scroll')
    {{-- Last End --}}

    {{-- Last Start --}}
    @include('include.outModel')
    {{-- Last End --}}
    
    {{-- Last Start --}}
    @include('include.last')
    {{-- Last End --}}