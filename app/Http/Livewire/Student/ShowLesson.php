<?php

namespace App\Http\Livewire\Student;

use App\Models\{ Answer,  Lesson, Question, Score};
use Livewire\Component;

class ShowLesson extends Component
{
    public $questions, $pages;
    public function mount($slug, $page){
        $lesson = Lesson::whereSlug($slug)->first();
        $this->questions= Question::whereLessonId($lesson->id)->wherePage($page)->get();
        $this->pages = Question::whereLessonId($lesson->id)->get();

        if(!Score::whereUserId(auth()->user()->id)->whereLessonId($lesson->id)->count()){
            Score::create([
                'user_id'       => auth()->user()->id,
                'lesson_id'     => $lesson->id,
                'score'         => 0
            ]);
        }

    }
    public function render()
    {
        return view('livewire.student.show-lesson', [
            'questions' => $this->questions
        ]);
    }
    // public function showanswer(){
    //     dd($this->answer);
    // }

    public $answer;
    public function submitAnswer($id, $lesson, $page, $correct, $action){
        $user_id= auth()->user()->id;


        $answer= Answer::whereUserId($user_id)->whereQuestionId($id)->first();
        $score= Score::whereUserId($user_id)->whereLessonId(Lesson::whereSlug($lesson)->first()->id)->first();

        if (!$this->answer) {
            
            if($action == 'prev'){
                return redirect()->route('student.lesson.show', ['slug'=>$lesson,'page'=>$page-1]);
            } elseif($action == 'next'){
                return redirect()->route('student.lesson.show', ['slug'=>$lesson,'page'=>$page+1]);
            }

        } else{
            if ($answer) {
                Answer::find($answer->id)->update([
                    'answer'         => $this->answer,
                ]);
                
                if($correct == $this->answer){
                    $score->update([
                        'score'     => $score->score+10
                    ]);
                }
            } else{
                Answer::create([
                    'user_id'       => $user_id,
                    'answer'         => $this->answer,
                    'question_id'   => $id
                ]);
                
                if($correct == $this->answer){
                    $score->update([
                        'score'     => $score->score+10
                    ]);
                }
            }
        }

        $this->answer= null;

        if($action == 'prev'){
            return redirect()->route('student.lesson.show', ['slug'=>$lesson,'page'=>$page-1]);
        } elseif($action == 'next'){
            return redirect()->route('student.lesson.show', ['slug'=>$lesson,'page'=>$page+1]);
        }
    }

    public function navigationControl($page, $slug){
        return redirect()->route('student.lesson.show', ['slug'=>$slug,'page'=>$page]);
    }
}
