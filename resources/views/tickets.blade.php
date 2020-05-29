
@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Tickets</h4>
          <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
            <ul class="quick-links">
              <li><a href="#">ICE Market data</a></li>
              <li><a href="#">Own analysis</a></li>
              <li><a href="#">Historic market data</a></li>
            </ul>
            <ul class="quick-links ml-auto">
              <li><a href="#">Settings</a></li>
              <li><a href="#">Analytics</a></li>
              <li><a href="#">Watchlist</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="page-header-toolbar">
          <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-left"></i></button>
            <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
            <button type="button" class="btn btn-secondary"><i class="mdi mdi-chevron-right"></i></button>
          </div>
          <div class="filter-wrapper">
            <div class="dropdown toolbar-item">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Day</button>
              <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                <a class="dropdown-item" href="#">Last Day</a>
                <a class="dropdown-item" href="#">Last Month</a>
                <a class="dropdown-item" href="#">Last Year</a>
              </div>
            </div>
            <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
          </div>
          <div class="sort-wrapper">
            <button type="button" class="btn btn-primary toolbar-item">New</button>
            <div class="dropdown ml-lg-auto ml-3 toolbar-item">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownexport" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</button>
              <div class="dropdown-menu" aria-labelledby="dropdownexport">
                <a class="dropdown-item" href="#">Export as PDF</a>
                <a class="dropdown-item" href="#">Export as DOCX</a>
                <a class="dropdown-item" href="#">Export as CDR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Horizontal Two column</h4>
            <form class="form-sample">
              <p class="card-description"> Personal info </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">First Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Last Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                    <div class="col-sm-9">
                      <input class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>Category1</option>
                        <option>Category2</option>
                        <option>Category3</option>
                        <option>Category4</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Membership</label>
                    <div class="col-sm-4">
                      <div class="form-radio">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Free <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="form-radio">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional <i class="input-helper"></i></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="card-description"> Address </p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Address 1</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">State</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Address 2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Postcode</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">City</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Country</label>
                    <div class="col-sm-9">
                      <select class="form-control">
                        <option>America</option>
                        <option>Italy</option>
                        <option>Russia</option>
                        <option>Britain</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
