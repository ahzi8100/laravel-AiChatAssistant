<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AgentConversation extends Model
{
    protected $table = 'agent_conversation';
    protected $fillable = ['id', 'user_id', 'title'];
    public $incrementing = false;

    public function messages(): HasMany
    {
        return $this->hasMany(AgentConversationMessage::class);
    }
}
