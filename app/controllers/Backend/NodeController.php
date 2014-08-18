<?php

use Chenkacrud\Nodes\MapperCommandTrait;
use Laracasts\Commander\CommanderTrait;

class NodeController extends \BaseController {

    use CommanderTrait;
    use MapperCommandTrait;

    /**
     * Display a listing of the resource.
     * GET /node
     *
     * @return Response
     */
    public function index($type)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * GET /node/create
     *
     * @return Response
     */
    public function create($type)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /node
     *
     * @return Response
     */
    public function store($type)
    {
        try
        {
            $this->execute($this->getCommandClassName($type));
        } catch (\Exception $e)
        {
        }
//        $fullClassName = getCommandClassName($type, 'Chenkacrud');
//
//        $this->execute($fullClassName);
//        validateSeo(Input::get('seo_tags'));
//        validateDataMain(Input::get('posts'));
//        validateBlockDisqus(Input::get('modules.block_disqus'));
//        validateBlockTwoColumns(Input::get('modules.block_two_columns'));
//        validateBlockVideoAndColumn(Input::get('modules.block_video_and_column'));
//
//        $node = new Node();
//        $node->title = 'my  type';
//        $data = Input::all();

    }

    /**
     * Display the specified resource.
     * GET /node/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /node/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /node/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /node/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}