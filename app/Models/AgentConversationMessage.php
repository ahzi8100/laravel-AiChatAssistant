<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AgentConversationMessage extends Model
{
    protected $table = 'agent_conversation_message';
    protected $fillable = ['conversation_id', 'role', 'message', 'id', 'user_id', 'content', 'attachment', 'tool_calls', 'tool_result', 'usage', 'meta'];
    public $incrementing = false;

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(AgentConversation::class);
    }
}
