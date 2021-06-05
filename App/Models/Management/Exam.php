<?php

namespace App\Models\Management;

use MF\Model\Model;

class Exam extends Model
{

    private $examId;
    private $examDescription;
    private $examValue;
    private $realizedDate;
    private $fk_id_exam_unity;
    private $fk_id_discipline_class;
    private $fk_id_class;


    public function __get($att)
    {
        return $this->$att;
    }


    public function __set($att, $newValue)
    {
        return $this->$att = $newValue;
    }


    public function insert()
    {

        $query =

            "INSERT INTO avaliacoes 

            (descricao_avaliacao , valor_avaliacao	, data_realizada , fk_id_unidade_avaliacao , fk_turma_disciplina_avaliacao)

            VALUES

            (:examDescription , :examValue , :realizeDate , :fk_id_exam_unity , :fk_id_discipline_class)
        
        ";

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':examDescription', $this->__get('examDescription'));
        $stmt->bindValue(':examValue', $this->__get('examValue'));
        $stmt->bindValue(':realizeDate', $this->__get('realizeDate'));
        $stmt->bindValue(':fk_id_exam_unity', $this->__get('fk_id_exam_unity'));
        $stmt->bindValue(':fk_id_discipline_class', $this->__get('fk_id_discipline_class'));

        $stmt->execute();
    }


    public function unity()
    {

        return $this->speedingUp(
            "SELECT unidade.id_unidade AS option_value , unidade.unidade AS option_text FROM unidade"
        );
    }


    public function sumUnitGrades()
    {

        $query =

            "SELECT SUM(avaliacoes.valor_avaliacao) AS sum_notes

            FROM avaliacoes 
            
            WHERE avaliacoes.fk_id_unidade_avaliacao = :fk_id_exam_unity

            AND avaliacoes.fk_turma_disciplina_avaliacao = :fk_id_discipline_class
            
        ";

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':fk_id_exam_unity', $this->__get('fk_id_exam_unity'));
        $stmt->bindValue(':fk_id_discipline_class', $this->__get('fk_id_discipline_class'));

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }


    public function examList($operation = '')
    {

        return $this->speedingUp(

            "SELECT 
            
            avaliacoes.id_avaliacao AS exam_id, 
            avaliacoes.descricao_avaliacao AS exam_description , 
            disciplina.nome_disciplina AS discipline_name, 
            avaliacoes.data_realizada AS realize_date, 
            avaliacoes.valor_avaliacao AS exam_value, 
            unidade.unidade AS unity,
            avaliacoes.fk_id_unidade_avaliacao AS fk_id_exam_unity,
            turma_disciplina.id_turma_disciplina AS fk_id_discipline_class ,
            professor.nome_professor AS teacher_name ,
            turma.id_turma AS class_id
            
            FROM avaliacoes 
            
            LEFT JOIN turma_disciplina ON(avaliacoes.fk_turma_disciplina_avaliacao = turma_disciplina.id_turma_disciplina) 
            LEFT JOIN turma ON(turma_disciplina.fk_id_turma = turma.id_turma)
            LEFT JOIN disciplina ON(turma_disciplina.fk_id_disciplina = disciplina.id_disciplina) 
            LEFT JOIN unidade ON(avaliacoes.fk_id_unidade_avaliacao = unidade.id_unidade) 
            LEFT JOIN professor ON(turma_disciplina.fk_id_professor = professor.id_professor)
            
            $operation
            
        "
        );
    }


    public function update()
    {

        $query =

            "UPDATE avaliacoes SET

            avaliacoes.data_realizada = :realizeDate ,
            avaliacoes.valor_avaliacao = :examValue ,
            avaliacoes.descricao_avaliacao = :examDescription 

            WHERE avaliacoes.id_avaliacao = :examId          
            
        ";

        $stmt = $this->db->prepare($query);

        $stmt->bindValue(':examDescription', $this->__get('examDescription'));
        $stmt->bindValue(':examValue', $this->__get('examValue'));
        $stmt->bindValue(':realizeDate', $this->__get('realizeDate'));
        $stmt->bindValue(':examId', $this->__get('examId'));

        $stmt->execute();
    }
}
