@extends('author.layouts.app')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">TNovel Data Overview</h3>
                    <p class="panel-subtitle">Period: {{date('d/m/Y')}}</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-book"></i></span>
                                <p>
                                    <span class="number">{{$dates->count()}}</span>
                                    <span class="title">Novel</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-clone"></i></span>
                                <p>
                                    <span class="number">{{$data->count()}}</span>
                                    <span class="title">Chapter</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-eye"></i></span>
                                <p>
                                    <span class="number">678</span>
                                    <span class="title">Visits</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                <p>
                                    <span class="number">20</span>
                                    <span class="title">Request</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div id="headline-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="671.25" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="671.25" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,265L50,172.143L153.542,129.286L257.083,165L360.625,50.714L464.167,157.857L567.708,165L671.25,86.429L671.25,265Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,265L50,236.429L153.542,157.857L257.083,207.857L360.625,93.571L464.167,129.286L567.708,65L671.25,22.143L671.25,265Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="103.54166666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 104px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="153.54166666666669" y="270" width="103.54166666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 104px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="257.08333333333337" y="270" width="103.54166666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 104px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="360.625" y="270" width="103.54166666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 104px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="464.1666666666667" y="270" width="103.54166666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 104px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="567.7083333333334" y="270" width="103.54166666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 104px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="671.25" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject></g></svg></div>
                        </div>
                        <div class="col-md-3">
                            <div class="weekly-summary text-right">
                                <span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
                                <span class="info-label">Total Sales</span>
                            </div>
                            <div class="weekly-summary text-right">
                                <span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
                                <span class="info-label">Monthly Income</span>
                            </div>
                            <div class="weekly-summary text-right">
                                <span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
                                <span class="info-label">Total Income</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OVERVIEW -->
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

@endsection


