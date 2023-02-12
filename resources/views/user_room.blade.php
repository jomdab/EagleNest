<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<x-app-layout>
    <!-- submit question bar -->
    <div class="container mx-auto my-3 bg-white ">
                <div class="flex justify-center">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12">
                                <form action="/submit-question" method="post">
                                    @csrf
                                    <div class="input-group">
                                    <input type="text" class="form-control" name="question" placeholder="Ask your question here...">
                                    <div class="input-group-append" style="display: flex;">
                                        <button class="btn btn-primary mx-2 " type="submit" style="width: 100%;">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</x-app-layout>