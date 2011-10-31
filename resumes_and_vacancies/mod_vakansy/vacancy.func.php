<?php

//Получаем список категорий для вакансий
function categories_index()
{
	d()->categories_list = d()->Category->all;
	print d()->categories_index_tpl();
}

//Список вакансий в определённой категории
function categories_show()
{
	d()->category=d()->Category->find(url(1));
	d()->vacancies_list = d()->category->vacancies;
	print d()->vacancies_list_tpl();
}

//Размещение формы с резюме
function show_resume()
{
	if(d()->validate('resume_add')){
		$new_resume = d()->Resume->new;
		$new_resume->name=d()->params['name'];
		$new_resume->age=d()->params['age'];
		$new_resume->graduation=d()->params['graduation'];
		$new_resume->pay=d()->params['pay'];
		$new_resume->phone=d()->params['phone'];
		$new_resume->save();
		header('Location: /resumes/');
	}
	print d()->resume_form_tpl();
}

//Список оставленных резюме
function resumes_list()
{
	d()->resumes_list=d()->Resume;
	print d()->resumes_list_tpl();
}