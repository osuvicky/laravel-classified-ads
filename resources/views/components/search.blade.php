<!-- Search Area Start Here -->
<section class="search-layout1 bg-body full-width-border-bottom fixed-menu-mt">
            <div class="container">
                <form id="post-add-form">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="form-group search-input-area input-icon-keywords">
                                <input placeholder="Enter Title here ..." name="title" id="title" type="text">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="form-group search-input-area input-icon-category">
                            <select class="select2" id="category">
                            <option selected value="">Categories</option>
                                @foreach (App\Models\Category::all() as $category)
                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="form-group search-input-area input-icon-category">
                                <select class="select2" id="country">
                                <option selected value="">Countries</option>
                                @foreach (App\Models\Country::all() as $country)
                                     <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 text-right text-left-mb">
                            <!-- <a href="#" class="cp-search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>Search
                            </a> -->
                            <button type="button" id="filter" class="cp-search-btn"><i class="fa fa-search" aria-hidden="true"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script>
            function filterResults(){
                let href = 'all-listings?';
                var title = document.getElementById("title").value;
                var country = document.getElementById("country").value;
                var category = document.getElementById("category").value;

                if (title.length) {
                    href += 'filter[title]=' + title;
                }
                if (category.length) {
                    href += '&filter[category_id]=' + category;
                }
                if (country.length) {
                    href += '&filter[country_id]=' + country;
                }

                document.location.href = href;
            }
            document.getElementById("filter").addEventListener("click", filterResults);
        </script>
        <!-- Search Area End Here -->
        @if (session('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
        @endif 