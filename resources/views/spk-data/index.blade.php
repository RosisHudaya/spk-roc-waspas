@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Menu Group and Menu Item</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Menu Group Management</h2>

            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Menu Group List</h4>
                            <div class="card-header-action">
                                <a class="btn btn-icon icon-left btn-primary" href="{{ route('user.create') }}">Create New
                                    User</a>
                                <a class="btn btn-info btn-primary active import">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                    Import User</a>
                                <a class="btn btn-info btn-primary active" href="{{ route('user.export') }}">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                    Export User</a>
                                <a class="btn btn-info btn-primary active search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    Search User</a>
                            </div>
                            {{-- <div class="card-header-action">
                                <button class="btn btn-icon icon-left btn-primary" type="button" data-toggle="collapse"
                                    data-target="#tableCollapse" aria-expanded="false" aria-controls="tableCollapse">
                                    Show/Hide Table
                                </button>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="show-import" style="display: none">
                                <div class="custom-file">
                                    <form action="{{ route('user.import') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label class="custom-file-label" for="file-upload">Choose File</label>
                                        <input type="file" id="file-upload" class="custom-file-input" name="import_file">
                                        <br /> <br />
                                        <div class="footer text-right">
                                            <button class="btn btn-primary">Import File</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="show-search mb-3" style="display: none">
                                <form id="search" method="GET" action="{{ route('user.index') }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">User</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="User Name">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <a class="btn btn-secondary" href="{{ route('user.index') }}">Reset</a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th>Alternatif</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                            <th>C6</th>
                                            <th>C7</th>
                                            <th>C8</th>
                                            <th>C9</th>
                                            <th>C10</th>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="collapse" id="tableCollapse">
                                    <!-- Add your table rows here -->
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary mt-3" id="calculateButton">Calculate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('customScript')
    <script>
        $(document).ready(function() {
            $('.import').click(function(event) {
                event.stopPropagation();
                $(".show-import").slideToggle("fast");
                $(".show-search").hide();
            });
            $('.search').click(function(event) {
                event.stopPropagation();
                $(".show-search").slideToggle("fast");
                $(".show-import").hide();
            });
            //ganti label berdasarkan nama file
            $('#file-upload').change(function() {
                var i = $(this).prev('label').clone();
                var file = $('#file-upload')[0].files[0].name;
                $(this).prev('label').text(file);
            });

            // Show/hide table button click event
            $('#tableCollapse').on('shown.bs.collapse', function() {
                $('#calculateButton').show();
            });

            $('#tableCollapse').on('hidden.bs.collapse', function() {
                $('#calculateButton').hide();
            });
        });
    </script>
@endpush

@push('customStyle')
@endpush
