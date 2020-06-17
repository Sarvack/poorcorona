@extends('template_backend.home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </div> -->
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Posts Property</h4>
                  </div>
                  <div class="card-body">
                    <div class="summary">
                      <div class="summary-item">
                        <!-- <h6 class="mt-3">Item List <span class="text-muted">(4 Items)</span></h6> -->
                        <ul class="list-unstyled list-unstyled-border">
                          <li class="media">
                            <a href="#">
                              <img alt="image" class="mr-3 rounded" width="50" src="{{ asset('public/assets/img/products/product-4-50.png') }}">
                            </a>
                            <div class="media-body">
                              <div class="media-right">{{ $data }}</div>
                              <div class="media-title"><a href="#">Total Posts</a></div>
                              <div class="text-small text-muted"> <span>{{ date('l') }}</span> <div class="bullet"></div>{{ date('Y-m-d') }}</div>
                            </div>
                          </li>
                          <li class="media">
                            <a href="#">
                              <img alt="image" class="mr-3 rounded" width="50" src="{{ asset('public/assets/img/products/product-1-50.png') }}">
                            </a>
                            <div class="media-body">
                              <div class="media-right">{{ $tag }}</div>
                              <div class="media-title"><a href="#">Total Tags</a></div>
                              <div class="text-small text-muted"> <span>{{ date('l') }}</span> <div class="bullet"></div>{{ date('Y-m-d') }}</div>
                            </div>
                          </li>
                          <li class="media">
                            <a href="#">
                              <img alt="image" class="mr-3 rounded" width="50" src="{{ asset('public/assets/img/products/product-2-50.png') }}">
                            </a>
                            <div class="media-body">
                              <div class="media-right">{{ $category }}</div>
                              <div class="media-title"><a href="#">Total Categories</a></div>
                              <div class="text-muted text-small"> <span>{{ date('l') }}</span> <div class="bullet"></div> {{ date('Y-m-d') }}
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Posts Attribute</h4>
                    <div class="card-header-action">
                      <a href="#" class="btn active disabled">Poor Corona</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="summary">
                      <div id="myChart2" height="180"></div>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('addition')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('myChart2', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Total Chart'
  },
  accessibility: {
    announceNewData: {
      enabled: true
    }
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Quantity'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y}'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
  },

  series: [
    {
      name: "Post Properties",
      colorByPoint: true,
      data: [
        {
          name: "Posts",
          y: {!! json_encode($data) !!},
          drilldown: "Posts"
        },
        {
          name: "Tags",
          y: {!! json_encode($tag) !!},
          drilldown: "Tags"
        },
        {
          name: "Categories",
          y: {!! json_encode($category) !!},
          drilldown: "Categories"
        }
      ]
    }
  ],
});
</script>
@endsection