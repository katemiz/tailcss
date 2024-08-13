<?php

namespace App\Livewire;

use Livewire\Component;

class ItemCreate extends Component
{
    public function render()
    {
        return view('livewire.item-create');
    }















    public function storeItem()
    {
        $props['aaa']  = $this->part_type;
        $props['bbb']  = Auth::id();
        $props['ccc']  = Auth::id();
        $props['weight']  = $this->weight;
        $props['remarks']  = $this->remarks;

        $props['part_number']  = $this->getProductNo();
        $props['makefrom_part_id']  = $this->makefrom_part_id;
        $props['c_notice_id']  = $this->c_notice_id;
        $props['unit']  = $this->unit;

        try {

            $item = Item::create($props);
            $this->uid = $item->id;

            $this->dispatch('triggerAttachment', modelId: $this->uid);
            $this->action = 'VIEW';

            $this->getProps();

        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!'.$ex);
        }
    }



















}
