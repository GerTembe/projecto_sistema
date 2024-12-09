<?php

use App\Http\Controllers\ExamControle;
use App\Http\Controllers\LoginControle;
use App\Http\Controllers\MonografiaControle;
use App\Http\Controllers\PdfControle;
use App\Http\Controllers\RevisaoControle;
use App\Http\Controllers\DefesaControle;
use App\Http\Controllers\CursoControle;
use App\Http\Controllers\EstudanteControle;
use App\Http\Controllers\OrientadorControle;
use Illuminate\Support\Facades\Route;

//============================== duvida =======================================================
Route::get('/', [LoginControle::class,'login'])-> name('welcome');
Route::get('/Logout', [LoginControle::class,'logout'])-> name('login.logout');
Route::post('/autenticacao', [LoginControle::class,'autenticacao'])-> name('login.autenticacao');


//========================= fim duvida  ========================================
Route::get('/home', [CursoControle::class,'home'])-> name('home');
Route::get('/footer', [CursoControle::class,'footer'])->name('footer');
Route::get('/header', [CursoControle::class,'header'])->name('header');
Route::get('/home/admin', [CursoControle::class,'home1'])-> name('home1');
Route::get('/header/admin', [CursoControle::class,'header1'])->name('header1');
// =============== curso ====================
Route::get('/cadastro', [CursoControle::class,'enviar'])->name('curso.enviar');
Route::get('/curso', [CursoControle::class,'index'])->name('curso.index');
Route::get('/curso/detalhe/{id}', [CursoControle::class,'detalhe'])->name('curso.detalhe');
Route::get('/curso/editar/{id}', [CursoControle::class,'editar'])->name('curso.editar');
Route::get('/curso/modificar1/{id}', [CursoControle::class,'modificar1'])->name('curso.modificar1');
Route::get('/curso/delete/{id}', [CursoControle::class,'delete'])->name('curso.delete');
Route::put('/curso/modificar/{id}', [CursoControle::class,'update'])->name('curso.update');
Route::post('/curso/cadastro', [CursoControle::class,'cadastro'])->name('curso.cadastro');
Route::get('/curso/msg', [CursoControle::class,'msg'])->name('curso.msg');
Route::get('/curso/msg_A', [CursoControle::class,'msg_A'])->name('curso.msg_A');
Route::get('/curso/msg_D', [CursoControle::class,'msg_D'])->name('curso.msg_D');

//========================================Estudante========================================

Route::get('/estudante/cadastro', [EstudanteControle::class,'enviar'])->name('estudante.enviar');
Route::get('/estudante', [EstudanteControle::class,'index'])->name('estudante.index');
Route::get('/estudante/editar/{id}', [EstudanteControle::class,'editar'])->name('estudante.editar');
Route::get('/estudante/delete/{id}', [EstudanteControle::class,'delete'])->name('estudante.delete');
Route::put('/estudante/modificar/{id}', [EstudanteControle::class,'update'])->name('estudante.update');
Route::post('/estudante/cadastro', [EstudanteControle::class,'cadastro'])->name('estudante.cadastro');
Route::get('/estudante/msg', [EstudanteControle::class,'msg'])->name('estudante.msg');
Route::get('/estudante/msg_A', [EstudanteControle::class,'msg_A'])->name('estudante.msg_A');
Route::get('/estudante/msg_D', [EstudanteControle::class,'msg_D'])->name('estudante.msg_D');
//-==============================================================================-

Route::get('/Monografia', [MonografiaControle::class,'index'])->name('monografia.index');
Route::get('/Monografia/Enviar', [MonografiaControle::class,'enviar'])->name('monografia.enviar');
Route::post('/Monografia/cadastro', [MonografiaControle::class,'cadastro'])->name('monografia.cadastro');
Route::get('/Monografia/editar/{id}', [MonografiaControle::class,'editar'])->name('monografia.editar');
Route::get('/Monografia/delete/{id}', [MonografiaControle::class,'delete'])->name('monografia.delete');
Route::put('/Monografia/modificar/{id}', [MonografiaControle::class,'update'])->name('monografia.update');
Route::get('/Monografia/msg', [MonografiaControle::class,'msg'])->name('monografia.msg');
Route::get('/Monografia/msg_A', [MonografiaControle::class,'msg_A'])->name('monografia.msg_A');
Route::get('/Monografia/msg_D', [MonografiaControle::class,'msg_D'])->name('monografia.msg_D');
//-==============================================================================-


//=======================================Orientador============================================
Route::get('/orientador/cadastro', [OrientadorControle::class,'enviar'])->name('orientador.enviar');
Route::get('/orientador', [OrientadorControle::class,'index'])->name('orientador.index');
Route::get('/orientador/editar/{id}', [OrientadorControle::class,'editar'])->name('orientador.editar');
Route::get('/orientador/delete/{id}', [OrientadorControle::class,'delete'])->name('orientador.delete');
Route::put('/orientador/modificar/{id}', [OrientadorControle::class,'update'])->name('orientador.update');
Route::post('/orientador/cadastro', [OrientadorControle::class,'cadastro'])->name('orientador.cadastro');
Route::get('/orientador/msg', [OrientadorControle::class,'msg'])->name('orientador.msg');
Route::get('/orientador/msg_A', [OrientadorControle::class,'msg_A'])->name('orientador.msg_A');
Route::get('/orientador/msg_D', [OrientadorControle::class,'msg_D'])->name('orientador.msg_D');
//-==================================================================================================================
//======================================= Examinador ============================================
Route::get('/Examinador/cadastro', [ExamControle::class,'enviar'])->name('examinador.enviar');
Route::get('/Examinador', [ExamControle::class,'index'])->name('examinador.index');
Route::get('/Examinador/editar/{id}', [ExamControle::class,'editar'])->name('examinador.editar');
Route::get('/Examinador/delete/{id}', [ExamControle::class,'delete'])->name('examinador.delete');
Route::put('/Examinador/modificar/{id}', [ExamControle::class,'update'])->name('examinador.update');
Route::post('/Examinador/cadastro', [ExamControle::class,'cadastro'])->name('examinador.cadastro');
Route::get('/Examinador/msg', [ExamControle::class,'msg'])->name('examinador.msg');
Route::get('/Examinador/msg_A', [ExamControle::class,'msg_A'])->name('examinador.msg_A');
Route::get('/Examinador/msg_D', [ExamControle::class,'msg_D'])->name('examinador.msg_D');
//-==================================================================================================================
//======================================= Revisoes ============================================
Route::get('/Revisao/cadastro', [RevisaoControle::class,'enviar'])->name('revisao.enviar');
Route::get('/Revisao', [RevisaoControle::class,'index'])->name('revisao.index');
Route::get('/Revisao/editar/{id}', [RevisaoControle::class,'editar'])->name('revisao.editar');
Route::get('/Revisao/delete/{id}', [RevisaoControle::class,'delete'])->name('revisao.delete');
Route::put('/Revisao/modificar/{id}', [RevisaoControle::class,'update'])->name('revisao.update');
Route::post('/Revisao/cadastro', [RevisaoControle::class,'cadastro'])->name('revisao.cadastro');
Route::get('/Revisao/msg', [RevisaoControle::class,'msg'])->name('revisao.msg');
Route::get('/Revisao/msg_A', [RevisaoControle::class,'msg_A'])->name('revisao.msg_A');
Route::get('/Revisao/msg_D', [RevisaoControle::class,'msg_D'])->name('revisao.msg_D');
//-==================================================================================================================
//======================================= Defesas ============================================
Route::get('/Defesa/cadastro', [DefesaControle::class,'enviar'])->name('defesa.enviar');
Route::get('/Defesa', [DefesaControle::class,'index'])->name('defesa.index');
Route::get('/Defesa/editar/{id}', [DefesaControle::class,'editar'])->name('defesa.editar');
Route::get('/Defesa/delete/{id}', [DefesaControle::class,'delete'])->name('defesa.delete');
Route::put('/Defesa/modificar/{id}', [DefesaControle::class,'update'])->name('defesa.update');
Route::post('/Defesa/cadastro', [DefesaControle::class,'cadastro'])->name('defesa.cadastro');
Route::get('/Defesa/msg', [DefesaControle::class,'msg'])->name('defesa.msg');
Route::get('/Defesa/msg_A', [DefesaControle::class,'msg_A'])->name('defesa.msg_A');
Route::get('/Defesa/msg_D', [DefesaControle::class,'msg_D'])->name('defesa.msg_D');
//-==================================================================================================================
Route::get('/RelatorioPDF', [PdfControle::class, 'gerarpdf'])->name('gerar.relatorio');





