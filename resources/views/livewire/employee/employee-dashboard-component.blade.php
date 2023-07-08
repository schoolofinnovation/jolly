               
               <div class="h3">Entrant
                  <a href="{{route('employee.addSpeaker')}}" class="btn btn-primary btn-sm">Add Entrant</a>
                </div>
                <div class="table-responsive fs-md mb-4">
                  <table class="table table-hover mb-0">
                          <thead>
                            <tr> 
                              <th>Name</th>
                              <th>email | Contact</th>
                              <th>Created At</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!--<tr>
                              <td class="py-1"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                              <td class="py-1">09/27/2019 | 09/30/2019</td>
                              <td class="py-1">Website problem</td>
                              <td class="py-1"><span class="badge bg-warning m-0">High</span></td>
                              <td class="py-1"><span class="badge bg-success m-0">Open</span></td>
                            </tr>--> 
                          
                            @foreach($speaker as $info)
                              <tr >
                                  
                                  <td class="py-1 align-middle">
                                    <div class="row">                                  
                                      <div class="col-6 pr-1 m-0 rounded-circle" style="width: auto">
                                        <img  class="rounded-circle" src="{{url('assets/image/'.$info->image) }}"  alt="no" style="max-width: 50%;">
                                      </div> 

                                      <div class="col-6 p-0 m-0">{{$info->name}}<br>
                                          <span class="align-middle badge bg-info ms-0">{{$info->organisation}}</span> | 
                                          <span class="align-middle badge bg-dark text-light ms-0">{{$info->businessteam->designation}}</span>  
                                      </div>                     
                                    </div>                      
                                  </td>
                                  <td class="py-1 align-middle"><span class="align-middle badge bg-info ms-0">{{$info->businessteam->email}} 
                                    <i class="bi bi-patch-check-fill"></i></span>
                                          <br> {{$info->businessteam->contact}} <i class="bi bi-patch-check-fill"></i>  </td>
                                  <td class="py-1 align-middle">{{Carbon\Carbon::parse ($info->created_at)->format('D, d M ')}}</td>          
                                  
                                  
                                  <td class="align-middle">
                                  <div class="dropdown">
                                  @if($info->admstatus == 0)
                                    <a class="btn-sm btn-primary form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"> 
                                        @if($info->admstatus == 0)
                                          <i class="bi bi-arrow-clockwise"></i>
                                        @else
                                          <i class="bi bi-check2-all"></i>   
                                        @endif
                                    @if($info->status == 0) Deactive @else Active @endif </a>

                                  @else
                                    <a class="btn-sm btn-info form-select-sm me-2 dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        @if($info->admstatus == 0)
                                          <i class="bi bi-arrow-clockwise"></i>
                                        @else
                                          <i class="bi bi-check2-all"></i>   
                                        @endif
                                      @if($info->status == 0) Deactive @else Active @endif 
                                    </a>
                                  @endif

                                    <ul class="dropdown-menu me-2" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#" wire:click.prevent="deliveredOrder()"><i class="bi bi-pencil"></i>Details</a></li>
                                        @if($info->status == 0)
                                            <li><a class="dropdown-item" href="#" wire:click.prevent="updateSpeakerStatus({{$info->id}} , '1')"><i class="bi bi-pencil"></i>Active</a></li>
                                        @else
                                            <li><a class="dropdown-item" href="#" wire:click.prevent="updateSpeakerStatus({{$info->id}}, '0')"><i class="bi bi-pencil"></i>Deactive</a></li>
                                        @endif
                                        <li><a class="dropdown-item" href="#" wire:click.prevent="deliveredOrder"> <i class="bi bi-pencil"></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="confirm('Are you sure, You want to delete this Entity?') || event.stopImmediatePropagation()"  wire:click.prevent="delet({{$info->id}})"> <i class="bi bi-x me-2"></i> Delete</a></li>
                                    </ul>
                                  </div>   
                                </td>
                              </tr>
                            @endforeach          
                          
                          </tbody>
                  </table>
                </div>  