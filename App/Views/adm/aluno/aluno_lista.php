<div id="aluno-lista">

    <div class="row main-container">

        <div class="col-lg-11 mx-auto">

            <h5 class="col-12 mb-4">Lista de alunos</h5>

            <div class="col-lg-12">

                <div class="card p-3 mb-3">

                    <form class="col-lg-11 accordion mx-auto mt-3" id="accordion-busca-avancada">

                        <div class="form-row">

                            <div class="form-group col-12 col-lg-5">
                                <label for="">Aluno:</label>
                                <input class="form-control" type="text" name="" placeholder="Nome do aluno ou CPF" id="">
                            </div>

                            <div class="form-group col-12 col-lg-3">
                                <label for="">Turma:</label>
                                <select class="form-control custom-select" name="" id="">
                                    <option value="">Todas</option>
                                    <option value="">INFO-1M-B</option>
                                    <option value="">INFO-1M-C</option>
                                    <option value="">INFO-1M-V</option>
                                </select>
                            </div>

                            <div class="form-group col-10 col-lg-3">
                                <label for="">Situação do aluno:</label>
                                <select class="form-control custom-select" name="" id="">
                                    <option value="">Estudando</option>
                                    <option value="">Reprovado</option>
                                    <option value="">Aprovado</option>
                                    <option value="">Desistente</option>
                                    <option value="">Recuperação final</option>
                                </select>

                            </div>

                            <div class="form-group col-2 col-lg-1">
                                <label for="">&nbsp;</label><br>
                                <div id="heading-busca-avancada">
                                    <a class="btn btn-white w-100 p-2" href="" data-toggle="collapse" data-target="#collapse-busca-avancada" aria-expanded="false" aria-controls="collapse-busca-avancada"><i class="fas fa-ellipsis-h"></i></a>
                                </div>
                            </div>

                            <div id="collapse-busca-avancada" class="collapse" aria-labelledby="heading-busca-avancada" data-parent="#accordion-busca-avancada">

                                <div class="form-row mx-auto">

                                    <div class="form-group col-12 col-lg-2">
                                        <label for="">Curso:</label>
                                        <select class="form-control custom-select" name="" id="">
                                            <option value="">Todos</option>
                                            <option value="">INFO</option>
                                            <option value="">ELET</option>
                                            <option value="">SEGU</option>
                                            <option value="">MECA</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-lg-2">
                                        <label for="">Sexo:</label>
                                        <select class="form-control custom-select" name="" id="">
                                            <option value="">Todos</option>
                                            <option value="">Masculino</option>
                                            <option value="">Feminino</option>
                                            <option value="">Outros</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-lg-2">
                                        <label for="">Periodo Letivo:</label>
                                        <select class="form-control custom-select" name="" id="">
                                            <option value="">2021</option>
                                            <option value="">2022</option>
                                            <option value="">2019</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-lg-2">
                                        <label for="">Turno:</label>
                                        <select class="form-control custom-select" name="" id="">
                                            <option value="">Todos</option>
                                            <option value="">Matutino</option>
                                            <option value="">Vespertino</option>
                                            <option value="">Noturno</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-12 col-lg-2">
                                        <label for="">Série:</label>
                                        <select class="form-control custom-select" name="" id="">
                                            <option value="">Todas</option>
                                            <option value="">1 ano</option>
                                            <option value="">2 ano</option>
                                            <option value="">3 ano</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                    <hr class="col-lg-10 col-10 mx-auto">

                    <div class="table-responsive">
                        <table class="table table-hover mt-3 table-borderless col-lg-11 mx-auto">

                            <thead>
                                <tr>
                                    <th colspan="2" scope="col">Nome do aluno</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">Turma</th>
                                    <th scope="col">Unidade Cadastrada</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class="text-right"><img src="/assets/img/foto-perfil-1.png" alt=""></td>
                                    <td class="text-left">Matheus de Souza Barbosa</td>
                                    <td>864.407.324-21</td>
                                    <td>INFO-1M-A</td>
                                    <td>
                                        <div class="row text-center d-flex justify-content-center mt-2">
                                            <div class="col-2 registered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-right"><img src="/assets/img/foto-perfil-1.png" alt=""></td>
                                    <td class="text-left">Matheus de Souza Barbosa</td>
                                    <td>864.407.324-21</td>
                                    <td>INFO-1M-A</td>
                                    <td>
                                        <div class="row text-center d-flex justify-content-center mt-2">
                                            <div class="col-2 registered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-right"><img src="/assets/img/foto-perfil-1.png" alt=""></td>
                                    <td class="text-left">Matheus de Souza Barbosa</td>
                                    <td>864.407.324-21</td>
                                    <td>INFO-1M-A</td>
                                    <td>
                                        <div class="row text-center d-flex justify-content-center mt-2">
                                            <div class="col-2 registered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-right"><img src="/assets/img/foto-perfil-1.png" alt=""></td>
                                    <td class="text-left">Matheus de Souza Barbosa</td>
                                    <td>864.407.324-21</td>
                                    <td>INFO-1M-A</td>
                                    <td>
                                        <div class="row text-center d-flex justify-content-center mt-2">
                                            <div class="col-2 registered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-right"><img src="/assets/img/foto-perfil-1.png" alt=""></td>
                                    <td class="text-left">Matheus de Souza Barbosa</td>
                                    <td>864.407.324-21</td>
                                    <td>INFO-1M-A</td>
                                    <td>
                                        <div class="row text-center d-flex justify-content-center mt-2">
                                            <div class="col-2 registered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-right"><img src="/assets/img/foto-perfil-1.png" alt=""></td>
                                    <td class="text-left">Matheus de Souza Barbosa</td>
                                    <td>864.407.324-21</td>
                                    <td>INFO-1M-A</td>
                                    <td>
                                        <div class="row text-center d-flex justify-content-center mt-2">
                                            <div class="col-2 registered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                            <div class="col-2 unregistered-unit-icon"><i class="fas fa-check-circle"></i></div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-perfil" id="perfilAlunoModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content p-2">
                        <div class="row">
                            <div class="col-lg-12"> <button type="button" class="close text-rig" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"><i class="fas fa-times-circle text-white mr-3 mt-2"></i></span>
                                </button></div>
                        </div>

                        <div class="modal-body w-100">

                            <div class="row p-3 d-flex justify-content-around col-lg-11 mx-auto">

                                <div class="col-lg-9">

                                    <div class="row accordion" id="accordion-perfil-aluno-opcoes">

                                        <ul class="list-group horizontal-control-list mx-auto list-group-horizontal">
                                            <li class="list-group-item" data-target="#collapse-perfil-aluno-opcoes-dados" aria-expanded="true" id="dados" data-toggle="collapse"><a class="" href="#"><i class="fas fa-portrait mr-2"></i> Dados</a></li>
                                            <li class="list-group-item" id="nota" data-toggle="collapse" aria-expanded="false" data-target="#collapse-perfil-aluno-opcoes-avaliacoes"><a href="#"> <i class="far fa-list-alt mr-2"></i> Avaliações</a></li>
                                            <li class="list-group-item" id="boletim" data-toggle="collapse" aria-expanded="false" data-target="#collapse-perfil-aluno-opcoes-boletim"><a href="#"> <i class="fas fa-clipboard mr-2"></i> Boletim</a></li>
                                        </ul>

                                        <div class="row">

                                            <div class="col-lg-12">

                                                <div class="row">

                                                    <div class="col-lg-12 collapse show overflow-auto p-3 container-accordion" id="collapse-perfil-aluno-opcoes-dados" aria-labelledby="dados" data-parent="#accordion-perfil-aluno-opcoes" style="border-radius: 15px">

                                                        <div class="row">

                                                            <div class="col-lg-2">

                                                                <div class="row">

                                                                    <div class="col-lg-12 mt-4"><img class="border-img-golden" src="/assets/img/foto-perfil-1.png" class="" alt=""></div>

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-10">

                                                                <div class="row">

                                                                    <div class="option-list col-lg-12">

                                                                        <span class="mr-2 edit-data-icon"><i class="text-center fas fa-edit"></i></span>
                                                                        <span class="mr-2 update-data-icon"><i class="fas fa-check"></i></span>

                                                                    </div>

                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-lg-7 col-12">

                                                                        <form class="" action="">

                                                                            <h5 class="mt-3 mb-3 ml-2">Dados pessoais:</h5>

                                                                            <div class="input-group d-flex col-12 col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Nome:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="João Pedro de Lima" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-12 col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Nome da mãe:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Maria Silva Costa Barbosa" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Nome do pai:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Carlos Silva Costa Teixeira" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">CPF:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="876.324.242-34" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Sexo:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Masculino" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Nacionalidade:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Brasileiro(a)" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Naturalidade:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Paulo Afonso" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">PcD:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Não" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Tipo sanguíneo:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="AB" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <hr>

                                                                            <h5 class="mt-3 mb-3 ml-2">Endereço e contato:</h5>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">CEP:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="48.601-340" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">UF:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="BA" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Município:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Paulo Afonso" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Bairro:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Poty" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Endereço:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Rua São Jorge n 100" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Telefone 01:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="(75) 98873-2423" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Telefone 02:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="(75) 98825-2328" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <hr>

                                                                            <h5 class="mt-3 mb-3 ml-2">Curso e turma:</h5>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Situação do aluno:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="Matriculado" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                            <div class="input-group d-flex justify-content-start col-lg-12 flex-nowrap">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text" id="addon-wrapping">Turma:</span>
                                                                                </div>
                                                                                <input type="text" disabled class="form-control" value="INFO-1M-C" aria-label="Username" aria-describedby="addon-wrapping">
                                                                            </div>

                                                                        </form>

                                                                    </div>

                                                                    <div class="col-lg-5 observation-side col-12 overflow-auto">

                                                                        <div class="row p-3">

                                                                            <h5 class="mt-3 mb-3 ml-2">Observações:</h5>

                                                                            <div class="col-lg-12">

                                                                                <div class="row">

                                                                                    <div class="card col-lg-12 card-hover bg-white mb-3">

                                                                                        <div class="card-body">
                                                                                            <h5 class="card-title">Comportamento Infantil</h5>
                                                                                            <p class="card-text">Aluno xingou seus colegas com palavras de baixo calão.</p>

                                                                                            <p><b>Professor(a):</b> Magno Lima</p>
                                                                                            <p><b>Disciplina:</b> Mátematica</p>
                                                                                            <p><b>Unidade:</b> 1</p>
                                                                                            <p><b>Data do ocorrido:</b> 31/08</p>

                                                                                        </div>


                                                                                    </div>

                                                                                </div>

                                                                                <div class="row">

                                                                                    <div class="card col-lg-12 bg-white  mt-3 mb-3">
                                                                                        <div class="card-body">
                                                                                            <h5 class="card-title">Gazeamento</h5>
                                                                                            <p class="card-text">Aluno saio para jogar bola</p>

                                                                                            <p><b>Professor(a):</b> Tássio Silva</p>
                                                                                            <p><b>Disciplina:</b> Biologia</p>
                                                                                            <p><b>Unidade:</b> 1</p>
                                                                                            <p><b>Data do ocorrido:</b> 11/10</p>

                                                                                        </div>

                                                                                    </div>

                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="col-lg-12 collapse overflow-auto p-3 container-accordion" id="collapse-perfil-aluno-opcoes-avaliacoes" aria-labelledby="nota" data-parent="#accordion-perfil-aluno-opcoes">



                                                        <div class="col-lg-12 accordion" id="accordion-avaliacoes">

                                                            <div class="row">

                                                                <div class="col-lg-12 mb-3">
                                                                    <div class="row d-flex align-items-center">
                                                                        <div class="col-lg-6">
                                                                            <h5>Avaliações</h5>
                                                                        </div>

                                                                        <div class="col-lg-6 d-flex collapse-option mb-3 justify-content-end">

                                                                            <a class="font-weight-bold" aria-expanded="true" data-toggle="collapse" data-target="#collapse-lista-avaliacoes"><span class="mr-2 items-icon"><i class="fas fa-boxes mr-2"></i> Avaliações</span></a>

                                                                            <a class="collapsed font-weight-bold" aria-expanded="false" data-toggle="collapse" data-target="#collapse-adicionar-avaliacoes"><span class="mr-2 items-icon"><i class="fas fa-plus-circle mr-2"></i> Adicionar</span></a>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12">

                                                                    <div class="collapse show card" id="collapse-lista-avaliacoes" data-parent="#accordion-avaliacoes">

                                                                        <form class="mt-3 col-lg-11 mx-auto  text-dark" action="">

                                                                            <div class="form-row mt-3">

                                                                                <div class="form-group col-lg-6">
                                                                                    <label for="">Nome da avaliacão:</label>
                                                                                    <input type="text" placeholder="Nome da avaliação" class="form-control">
                                                                                </div>

                                                                                <div class="form-group col-lg-3">
                                                                                    <label for="inputState">Disciplina:</label>
                                                                                    <select id="inputState" class="form-control custom-select" required>
                                                                                        <option>Matemática</option>
                                                                                        <option>Ensino Médio</option>
                                                                                        <option>Técnico</option>
                                                                                    </select>
                                                                                </div>

                                                                                <div class="form-group col-lg-3">
                                                                                    <label for="inputState">UE referente:</label>
                                                                                    <select id="inputState" class="form-control custom-select" required>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                    </select>
                                                                                </div>

                                                                            </div>

                                                                        </form>

                                                                        <hr class="col-lg-11 mx-auto">

                                                                        <div class="table-responsive">

                                                                            <table class="table col-lg-11 mx-auto table-borderless table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Id</th>
                                                                                        <th scope="col">Avaliação</th>
                                                                                        <th scope="col">UE</th>
                                                                                        <th scope="col">Disciplina</th>
                                                                                        <th scope="col">Data</th>
                                                                                        <th scope="col">Valor</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>

                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Prova em dupla</td>
                                                                                        <td>1</td>

                                                                                        <td>Matemática</td>
                                                                                        <td>20/12/2001</td>
                                                                                        <td>4,0</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Prova em dupla</td>
                                                                                        <td>1</td>

                                                                                        <td>Matemática</td>
                                                                                        <td>20/12/2001</td>
                                                                                        <td>4,0</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Prova em dupla</td>
                                                                                        <td>1</td>

                                                                                        <td>Matemática</td>
                                                                                        <td>20/12/2001</td>
                                                                                        <td>4,0</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Prova em dupla</td>
                                                                                        <td>1</td>

                                                                                        <td>Matemática</td>
                                                                                        <td>20/12/2001</td>
                                                                                        <td>4,0</td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>

                                                                    </div>



                                                                    <div class="collapse card" id="collapse-adicionar-avaliacoes" data-parent="#accordion-avaliacoes">

                                                                        <form class="col-lg-12" action="">

                                                                            <div class="form-row mt-3">

                                                                                <div class="form-group col-lg-6">
                                                                                    <label for="">Nome da avaliação:</label>

                                                                                    <input class="form-control" type="text">

                                                                                </div>

                                                                                <div class="form-group col-lg-3">
                                                                                    <label for="">Disciplina:</label>

                                                                                    <select id="inputState" class="form-control custom-select" required>
                                                                                        <option>Ana Silva</option>
                                                                                        <option>Meickson</option>
                                                                                        <option>Tassio</option>
                                                                                        <option>Carlos</option>
                                                                                    </select>

                                                                                </div>

                                                                                <div class="form-group col-lg-3">
                                                                                    <label for="">Unidade:</label>

                                                                                    <select id="inputState" class="form-control custom-select" required>
                                                                                        <option>Matemática</option>
                                                                                        <option>Biologia</option>
                                                                                        <option>Português</option>
                                                                                        <option>Filosofia</option>
                                                                                    </select>

                                                                                </div>

                                                                            </div>

                                                                            <div class="form-row">
                                                                                <div class="form-group col-lg-2">
                                                                                    <label for="">Valor:</label>

                                                                                    <input class="form-control" type="text">
                                                                                </div>
                                                                                <div class="form-group col-lg-3">
                                                                                    <label for="">&nbsp;</label>
                                                                                    <a class="btn btn-success w-100" href="">Adicionar disciplina</a>
                                                                                </div>

                                                                            </div>

                                                                        </form>

                                                                    </div>

                                                                </div>



                                                            </div>



                                                        </div>


                                                    </div>


                                                    <div class="col-lg-12 collapse  container-accordion overflow-auto" id="collapse-perfil-aluno-opcoes-boletim" aria-labelledby="boletim" data-parent="#accordion-perfil-aluno-opcoes">

                                                        <div class="row">

                                                            <div class="col-lg-12">
                                                                <div class="row mt-3">
                                                                    <div class="col-lg-6 col-8">
                                                                        <h5 class="">Boletim do aluno</h5>
                                                                    </div>
                                                                    <div class="col-lg-6 col-4 mt-3 text-right"><span class="imprimir-boletim"><i class="fas fa-print"></i></span></div>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 mt-3"><b>Aluno:</b> João Pedro de Souza</div>

                                                            <div class="col-lg-12 mt-3"><b>Nível / Modalidade de ensino:</b> Ensino Profissional, Médio Intregado</div>

                                                            <div class="col-lg-12">

                                                                <div class="row mt-3">
                                                                    <div class="col-lg-5"><b>Série:</b> 1 Serie - Tecnico em Informática</div>
                                                                    <div class="col-lg-3"><b>Classe:</b> INFO-1M-B</div>
                                                                    <div class="col-lg-3"><b>Sala:</b> 13</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 card mt-3">

                                                                <div class="row table-responsive">

                                                                    <table class="table table-striped table-bordered mt-3">

                                                                        <thead class="">

                                                                            <tr>

                                                                                <th class="th-rowspan-2" colspan="" rowspan="2" scope="col">
                                                                                    <div class="col-lg-11">Componentes Curriculares</div>
                                                                                </th>

                                                                                <th class="text-center" colspan="3" scope="col">I Unidade</th>
                                                                                <th class="text-center " colspan="3" scope="col">II Unidade</th>
                                                                                <th class="text-center " colspan="3" scope="col">III Unidade</th>

                                                                                <th class="th-rowspan-2" rowspan="2" scope="col">
                                                                                    <div class="col-lg-11">REC FINAL</div>
                                                                                </th>

                                                                                <th class="th-rowspan-2" rowspan="2" scope="col">
                                                                                    <div class="col-lg-11">Média Final</div>
                                                                                </th>

                                                                                <th class="th-rowspan-2" rowspan="2" scope="col">
                                                                                    <div class="col-lg-11">Freq(%)</div>
                                                                                </th>

                                                                                <th class="th-rowspan-2" rowspan="2" scope="col">
                                                                                    <div class="col-lg-11">Resultado Final</div>
                                                                                </th>
                                                                            </tr>

                                                                            <tr class="dados-unidade">
                                                                                <th class="" scope="col">Nota</th>
                                                                                <th class="" scope="col">Faltas</th>
                                                                                <th class="" scope="col">Dispensa</th>
                                                                                <th class="" scope="col">Nota</th>
                                                                                <th class="" scope="col">Faltas</th>
                                                                                <th class="" scope="col">Dispensa</th>
                                                                                <th class="" scope="col">Nota</th>
                                                                                <th class="" scope="col">Faltas</th>
                                                                                <th class="" scope="col">Dispensa</th>
                                                                            </tr>



                                                                        </thead>

                                                                        <tbody>

                                                                            <tr class="">
                                                                                <td class="">Biologia</td>
                                                                                <td class="nota-verde">8,20</td>
                                                                                <td class="">2</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-vermelha">3,20</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-verde">9,00</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="">&nbsp;</td>
                                                                                <td class="">7,25</td>
                                                                                <td class="">87,25</td>
                                                                                <td class="">AP</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="">Biologia</td>
                                                                                <td class="nota-verde">8,20</td>
                                                                                <td class="">2</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-vermelha">3,20</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-verde">9,00</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="">&nbsp;</td>
                                                                                <td class="">7,25</td>
                                                                                <td class="">87,25</td>
                                                                                <td class="">AP</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="">Biologia</td>
                                                                                <td class="nota-verde">8,20</td>
                                                                                <td class="">2</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-vermelha">3,20</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-verde">9,00</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="">&nbsp;</td>
                                                                                <td class="">7,25</td>
                                                                                <td class="">87,25</td>
                                                                                <td class="">AP</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="">Biologia</td>
                                                                                <td class="nota-verde">8,20</td>
                                                                                <td class="">2</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-vermelha">3,20</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-verde">9,00</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="">&nbsp;</td>
                                                                                <td class="">7,25</td>
                                                                                <td class="">87,25</td>
                                                                                <td class="">AP</td>
                                                                            </tr>
                                                                            <tr class="">
                                                                                <td class="">Biologia</td>
                                                                                <td class="nota-verde">8,20</td>
                                                                                <td class="">2</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-vermelha">3,20</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="nota-verde">9,00</td>
                                                                                <td class="">3</td>
                                                                                <td class="">0</td>
                                                                                <td class="">&nbsp;</td>
                                                                                <td class="">7,25</td>
                                                                                <td class="">87,25</td>
                                                                                <td class="">AP</td>
                                                                            </tr>



                                                                        </tbody>

                                                                        <tfoot>

                                                                            <th>Situação do aluno(a):</th>
                                                                            <td>APROVADO</td>

                                                                        </tfoot>




                                                                    </table>



                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>


                                                    <div class="col-lg-12 collapse overflow-auto" id="modalThree" aria-labelledby="mais" data-parent="#accordion-perfil-aluno-opcoes">
                                                        <h5>Mais</h5>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-2 controle-opcoes">

                                    <ul class="list-group text-center">

                                        <li class="list-group-item border-0" data-target="#collapse-perfil-aluno-opcoes-dados" aria-expanded="true" id="dados" data-toggle="collapse"><a class="" href="#"><i class="fas fa-portrait mr-2"></i> Dados</a></li>

                                        <li class="list-group-item border-0" id="nota" data-toggle="collapse" aria-expanded="false" data-target="#collapse-perfil-aluno-opcoes-avaliacoes"><a href="#"> <i class="far fa-list-alt mr-2"></i> Avaliações</a></li>

                                        <li class="list-group-item border-0" id="boletim" data-toggle="collapse" aria-expanded="false" data-target="#collapse-perfil-aluno-opcoes-boletim"><a href="#"> <i class="fas fa-clipboard mr-2"></i> Boletim</a></li>

                                        <li class="list-group-item border-0" id="mais" aria-expanded="false" data-toggle="collapse" data-target="#modalThree"><a href="#"><i class="fas fa-chart-line mr-2"></i> Análise </a></li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>