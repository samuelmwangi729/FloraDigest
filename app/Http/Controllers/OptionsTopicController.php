<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOptionsTopicRequest;
use App\Http\Requests\UpdateOptionsTopicRequest;
use App\Repositories\OptionsTopicRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

class OptionsTopicController extends AppBaseController
{
    /** @var  OptionsTopicRepository */
    private $optionsTopicRepository;

    public function __construct(OptionsTopicRepository $optionsTopicRepo)
    {
        $this->optionsTopicRepository = $optionsTopicRepo;
    }

    /**
     * Display a listing of the OptionsTopic.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $optionsTopics = $this->optionsTopicRepository->all();

        return view('options_topics.index')
            ->with('optionsTopics', $optionsTopics);
    }

    /**
     * Show the form for creating a new OptionsTopic.
     *
     * @return Response
     */
    public function create()
    {
        return view('options_topics.create');
    }

    /**
     * Store a newly created OptionsTopic in storage.
     *
     * @param CreateOptionsTopicRequest $request
     *
     * @return Response
     */
    public function store(CreateOptionsTopicRequest $request)
    {
        $input = $request->all();

        $optionsTopic = $this->optionsTopicRepository->create($input);

       Session::flash('success','Success, topic Successfully Added');

        return redirect(route('optionsTopics.index'));
    }

    /**
     * Display the specified OptionsTopic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $optionsTopic = $this->optionsTopicRepository->find($id);

        if (empty($optionsTopic)) {
            Flash::error('Options Topic not found');

            return redirect(route('optionsTopics.index'));
        }

        return view('options_topics.show')->with('optionsTopic', $optionsTopic);
    }

    /**
     * Show the form for editing the specified OptionsTopic.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $optionsTopic = $this->optionsTopicRepository->find($id);

        if (empty($optionsTopic)) {
            Session::flash('error','Not Found');

            return redirect(route('optionsTopics.index'));
        }

        return view('options_topics.edit')->with('optionsTopic', $optionsTopic);
    }

    /**
     * Update the specified OptionsTopic in storage.
     *
     * @param int $id
     * @param UpdateOptionsTopicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOptionsTopicRequest $request)
    {
        $optionsTopic = $this->optionsTopicRepository->find($id);

        if (empty($optionsTopic)) {
            Session::flash('error','Not Found');

            return redirect(route('optionsTopics.index'));
        }

        $optionsTopic = $this->optionsTopicRepository->update($request->all(), $id);

        Session::flash('success','Topic Successfully Updated');

        return redirect(route('optionsTopics.index'));
    }

    /**
     * Remove the specified OptionsTopic from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $optionsTopic = $this->optionsTopicRepository->find($id);

        if (empty($optionsTopic)) {
            Session::flash('error','Not Found');

            return redirect(route('optionsTopics.index'));
        }

        $this->optionsTopicRepository->delete($id);

        Session::flash('error','Success, topic Successfully Deleted');

        return redirect(route('optionsTopics.index'));
    }
}
