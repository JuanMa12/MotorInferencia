@extends('template')

@section('content')
  <div class="col-md-12 top20">
    <div class="jumbotron text-center">
      <h3>Arbol de reglas</h3>
      <div class="row">
            <div class="col-md-12">
              <div class="col-md-4 top20"></div>
              <div class="col-md-4 top20">
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Es Domestico
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    @foreach($animals as $animal)
                      @if($animal->domestic == 'true')
                        <li>
                          <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                              <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                            </div>
                            <div class="col-md-8">
                              <span>{{ $animal->name }}</span>
                            </div>
                          </div>
                        </li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="dropdown">
                  <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No Es Domestico
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    @foreach($animals as $animal)
                      @if($animal->domestic == 'false')
                        <li>
                          <div class="row">
                            <div class="col-md-3 col-md-offset-1">
                              <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                            </div>
                            <div class="col-md-8">
                              <span>{{ $animal->name }}</span>
                            </div>
                          </div>
                        </li>
                      @endif
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-12">
            <div class="col-md-4 top20">
              <h4>Salta:</h4>
            </div>

            <div class="col-md-4 top20">
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      @foreach($animals as $animal)
                        @if($animal->jump == 'true' && $animal->domestic == 'true')
                          <li>
                            <div class="row">
                              <div class="col-md-3 col-md-offset-1">
                                <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                              </div>
                              <div class="col-md-8">
                                <span>{{ $animal->name }}</span>
                              </div>
                            </div>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      @foreach($animals as $animal)
                        @if($animal->jump == 'false' && $animal->domestic == 'true')
                          <li>
                            <div class="row">
                              <div class="col-md-3 col-md-offset-1">
                                <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                              </div>
                              <div class="col-md-8">
                                <span>{{ $animal->name }}</span>
                              </div>
                            </div>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 top20">
              <div class="row">
                <div class="col-md-6 col-xs-6">
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      @foreach($animals as $animal)
                        @if($animal->jump == 'true' && $animal->domestic == 'false')
                          <li>
                            <div class="row">
                              <div class="col-md-3 col-md-offset-1">
                                <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                              </div>
                              <div class="col-md-8">
                                <span>{{ $animal->name }}</span>
                              </div>
                            </div>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="dropdown">
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      @foreach($animals as $animal)
                        @if($animal->jump == 'false' && $animal->domestic == 'false')
                          <li>
                            <div class="row">
                              <div class="col-md-3 col-md-offset-1">
                                <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                              </div>
                              <div class="col-md-8">
                                <span>{{ $animal->name }}</span>
                              </div>
                            </div>
                          </li>
                        @endif
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-12">
              <div class="col-md-4 top20">
                <h4>Ladra:</h4>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->bark == 'true' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->bark == 'false' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->bark == 'true' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->bark == 'false' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4 top20">
                <h4>Extinción:</h4>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->extinction == 'true' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->extinction == 'false' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->extinction == 'true' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->extinction == 'false' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4 top20">
                <h4>Vuela:</h4>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->flying == 'true' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->flying == 'false' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->flying == 'true' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->flying == 'false' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4 top20">
                <h4>Se puede Montar:</h4>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->mount == 'true' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->mount == 'false' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->mount == 'true' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->mount == 'false' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4 top20">
                <h4>Roedor:</h4>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->rodent == 'true' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->rodent == 'false' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->rodent == 'true' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->rodent == 'false' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="col-md-4 top20">
                <h4>Tiene Rayas:</h4>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->stripes == 'true' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->stripes == 'false' && $animal->domestic == 'true')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-4 top20">
                <div class="row">
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Si
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->stripes == 'true' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">No
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        @foreach($animals as $animal)
                          @if($animal->stripes == 'false' && $animal->domestic == 'false')
                            <li>
                              <div class="row">
                                <div class="col-md-3 col-md-offset-1">
                                  <img class="img-responsive img-circle img-small" src="{{ $animal->image }}">
                                </div>
                                <div class="col-md-8">
                                  <span>{{ $animal->name }}</span>
                                </div>
                              </div>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 top20">
              <div class="table-responsive">
                <table class="table table-bordered top20">
                  <thead>
                    <tr>
                      <th>Animal</th>
                      <th>Domestico</th>
                      <th>Salta</th>
                      <th>Ladra</th>
                      <th>Extinción</th>
                      <th>Vuela</th>
                      <th>Se puede Montar</th>
                      <th>Roedor</th>
                      <th>Tiene Rayas</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($animals as $animal)
                      <tr>
                        <td>{{ $animal->name }}</td>
                        <td>{{ $animal->domestic }}</td>
                        <td>{{ $animal->jump }}</td>
                        <td>{{ $animal->bark }}</td>
                        <td>{{ $animal->extinction }}</td>
                        <td>{{ $animal->flying }}</td>
                        <td>{{ $animal->mount }}</td>
                        <td>{{ $animal->rodent }}</td>
                        <td>{{ $animal->stripes }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

            <div class="col-md-12">
              <a href="{{url('/')}}" class="btn btn-success"><i class="fa fa-home"></i> Inicio</a>
            </div>

      </div>
    </div>
  </div>
@endsection
